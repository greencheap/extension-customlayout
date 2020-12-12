<template>
    <div>
        Hello World
    </div>
</template>

<script>
    const CustomLayout = {
        section: {
            label: 'Settings'
        },

        props: ['widget', 'config', 'form'],

        inject: ['$components'],

        replace: false,
    }

    export default CustomLayout;
    window.Widgets.component['customlayout-app.settings'] = CustomLayout
</script>