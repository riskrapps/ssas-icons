<template>
    <div :style="{textAlign: state.align ? state.align : 'center' }">
        <div class="ssa-icons" :class="[state.mini ? 'mini' : null, icon]"></div>
    </div>
</template>
<script>
import {base} from 'swiftdocs'

export default {

    extends: base(),

    data() {
        return {
            icon: null,
        }
    },

    watch: {
        'state.icon'() {
            this.refreshIcon()
        },
        inRenderMode() {
            this.refreshIcon()
        }
    },

    created() {
        this.refreshIcon()
    },

    methods: {
        refreshIcon() {
            if ( ! this.state.icon.variable || ! this.inRenderMode) {
                this.icon = this.state.icon.placeholder
                return
            }
            
            this.icon = _.get(
                this.context,
                this.state.icon.variable,
                this.state.icon.placeholder
            )            
        }
    }
}
</script>