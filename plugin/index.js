require('../dist/iconset.css')

module.exports = {
    // Any name you choose is fine, just make it unique
    id: 'd-ssas-icon',
    // Icon options are here: https://material.io/icons/
    icon: 'album',
    // The name of this element
    label: 'SSAS Icon',

    // The vue component that renders this item
    renderer: require('./renderer.vue'),

    // Optional menu Vue component.
    // This will be displayed when your custom item is selected
    menu: require('./menu.vue'),

    defaultState: {
        // Initial state of your element when added to the document
        // Each instance of the element has its own isolated state.
        icon: {
            variable: '',
            placeholder: 'question-mark',
        }
    },

    defaultStyle: {
        // This is optional
        // You can pass a custom style for your element   
    }
}