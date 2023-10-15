<script setup>
import {onMounted, reactive, ref} from "vue";
import { Link } from '@inertiajs/vue3'
import Vue3Datatable from "@bhplugin/vue3-datatable";
import "@bhplugin/vue3-datatable/dist/style.css";

const props = defineProps({
    asset_computers: {type: Object, required: true}
})

const cols = ref([
    { field: "id", title: "ID", width: "90px" },
    { field: "asset_number", title: "Asset number" },
    { field: "serial_number", title: "Serial number" },
    { field: "asset_name", title: "Asset name" },
    { field: "asset_status", title: "Asset status" },
    { field: "asset_group", title: "Asset group" },
    { field: "asset_date", title: "Asset date" },
    { field: "objective", title: "Objective" },
    { field: "project_service", title: "Project service" },
    { field: "owner", title: "Owner" },
    { field: "department_owner", title: "Department owner" },
    { field: "location", title: "Location" },
    { field: "asset_type", title: "Asset type" },
    { field: "brand", title: "Brand" },
    { field: "generation", title: "Generation" },
    { field: "ram_type", title: "Ram type" },
    { field: "ram_unit", title: "Ram unit" },
    { field: "asset_os", title: "Asset os" },
    { field: "harddisk", title: "Harddisk" },
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
        <div class="template-demo tw-mb-4 tw-rounded">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-inverse-info">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Inventory</li>
                </ol>
            </nav>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="tw-flex tw-justify-between tw-items-center tw-mb-4">
                    <h4 class="card-title">Item</h4>
                    <Link :href="$route('create-item')" type="button" class="btn btn-danger btn-icon-text" style="margin-bottom: 0.5rem;">
                        <i class="ti-upload btn-icon-prepend"></i>
                        Add items
                    </Link>
                </div>
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
