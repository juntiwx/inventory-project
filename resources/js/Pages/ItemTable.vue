<script setup>
import Vue3Datatable from "@bhplugin/vue3-datatable";
import "@bhplugin/vue3-datatable/dist/style.css";
import {onMounted, reactive, ref} from "vue";

const props = defineProps({
    asset_computers: {type: Object, required: true}
})

const cols = ref([
    { field: "id", title: "ID", width: "90px", filter: false },
    { field: "asset_number", title: "asset_number" },
    { field: "serial_number", title: "serial_number" },
    { field: "asset_name", title: "asset_name" },
    { field: "asset_status", title: "asset_status" },
    { field: "asset_group", title: "asset_group" },
    { field: "asset_date", title: "asset_date" },
    { field: "objective", title: "objective" },
    { field: "project_service", title: "project_service" },
    { field: "owner", title: "owner" },
    { field: "department_owner", title: "department_owner" },
    { field: "location", title: "location" },
    { field: "asset_type", title: "asset_type" },
    { field: "brand", title: "brand" },
    { field: "generation", title: "generation" },
    { field: "ram_type", title: "ram_type" },
    { field: "ram_unit", title: "ram_unit" },
    { field: "asset_os", title: "asset_os" },
]);

const rows = ref([]);

const bind_data = () => {
    rows.value = props.asset_computers;
};

onMounted(() => {
    bind_data();
});

const params = reactive({ current_page: 1, pagesize: 20, sort_column: 'id', sort_direction: 'asc' });

</script>

<template>
    <div class="tw-mx-10">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data table</h4>
                <div class="row">
                    <div class="table-responsive">
                        <vue3-datatable
                            :rows="rows"
                            :columns="cols"
                            :columnFilter="true"
                            :pageSize="params.pagesize"
                            :hasCheckbox="true"
                        > </vue3-datatable>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
