<template>
    <div>
        <h5 style="margin-bottom:0">Icon</h5>
        <div class="mt-2 mb-2">
            <div class="checkbox"><label><input type="checkbox" :checked="state.mini" @change="updateMini(arguments[0].target.checked)"> <i class="material-icons mr-1">check_circle</i> Mini Icon</label></div>
        </div>
        
        <label>Placeholder</label>
        <select class="form-control mb-2" :value="state.icon.placeholder" @change="updatePlaceholder($event)">
            <option v-for="icon in icons" :key="icon" :value="icon">{{ icon }}</option>
        </select>
        <label>Icon Variable</label>
        <input type="text" v-model="variable" />
        <button class="btn btn-primary" @click="updateVariable()">Set Variable</button>
    
        <br><br>

        <h5>Alignment</h5>
        <div class="checkbox">
            <label>
                <input type="checkbox" :checked="state.align == 'left'" @change="updateAlignment('left')" />
                <i class="material-icons">format_align_left</i>
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" :checked="state.align == 'center'" @change="updateAlignment('center')" />
                <i class="material-icons">format_align_center</i>
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" :checked="state.align == 'right'" @change="updateAlignment('right')" />
                <i class="material-icons">format_align_right</i>
            </label>
        </div>        
    </div>
</template>
<script>
import {base, actions} from 'swiftdocs'
import icons from '../icons'

icons.sort()

export default {
    
    extends: base(),

    data() {
        return {
            icons: icons,
            variable: '',
        }
    },
    mounted() {
        this.getVariable()
    },
    watch: {
        id() {
            this.getVariable()
        }
    },
    methods: {
        getVariable() {
            this.variable = _.get(actions.getContentState(this.id), 'icon.variable')
        },
        updateMini(mini) {
            actions.updateContentState(this.id, {
                mini
            })            
        },
        updatePlaceholder($event) {
            actions.updateContentState(this.id, {
                icon: {
                    ...this.state.icon,
                    placeholder: $event.target.value
                }
            })
        },
        updateAlignment(align) {
            actions.updateContentState(this.id, {align})
        },
        updateVariable() {
            actions.updateContentState(this.id, {
                icon: {
                    ...this.state.icon,
                    variable: this.variable
                }
            })
            notifySuccess('Variable Set', 'Icon variable set')
        }
    },
}
</script>