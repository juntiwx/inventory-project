import '../images/icon.png';
import '../css/app.css';
import '../css/horizontal-layout-light.css';
import './script.js';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import AppLayout from "./Pages/Layouts/AppLayout.vue";

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', {eager: true})
        let page = pages[`./Pages/${name}.vue`]
        page.default.layout = name.startsWith('Public/') ? undefined : AppLayout
        return page
    },
    setup({el, App, props, plugin}) {
        const app = createApp({render: () => h(App, props)})
            .use(plugin)

        app.config.globalProperties.$route = route

        app.mount(el)
    },
}).then(r => console.log("build successfully"))
