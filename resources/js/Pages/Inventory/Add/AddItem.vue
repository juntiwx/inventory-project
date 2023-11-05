<script setup>
import {ref} from 'vue';

import VSelect from 'vue-select'
import '../../../../css/vue-select.css';

import VueDatePicker from '@vuepic/vue-datepicker';
import {useForm} from "@inertiajs/vue3";

const props = defineProps({
    statuses: {type: Object, required: true},
    objectives: {type: Object, required: true},
    projects: {type: Object, required: true},
    staff_profiles: {type: Object, required: true},
    departments: {type: Object, required: true},
    locations: {type: Object, required: true},
    item_types: {type: Object, required: true},
    brands: {type: Object, required: true},
    operating_systems: {type: Object, required: true},
    harddisks: {type: Object, required: true},
})

const date = ref();

const asset_groups = [
    {id: 'Buy', label: 'Buy'},
    {id: 'Lease', label: 'Lease'},
]

const ram_types = [
    {id: 'DDR3', label: 'DDR3'},
    {id: 'DDR4', label: 'DDR4'},
]

const form = useForm({
    asset_number: null,
    serial_number: null,
    asset_name: null,
    item_status_id: null,
    asset_group: null,
    asset_date: null,
    objective: null,
    project_service: null,
    owner: null,
    department_owner: null,
    location: null,
    asset_type: null,
    brand: null,
    generation: null,
    ram_type: null,
    ram_unit: null,
    asset_os: null,
    harddisk: null,
});

const saveForm = () => {
    form.post(window.route('save-item'))
}

</script>

<template>
    <div class="row grid-margin">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Basic form validation</h4>
                    <form class="cmxform" id="commentForm" method="get" action="#">
                        <fieldset>
                            <div class="form-group">
                                <label for="asset_number">Asset number</label>
                                <input
                                    class="form-control"
                                    id="asset_number"
                                    name="asset_number"
                                    type="text"
                                    placeholder="Type Something..."
                                    v-model="form.asset_number"
                                >
                            </div>
                            <div class="form-group">
                                <label for="serial_number">Serial number</label>
                                <input
                                    class="form-control"
                                    id="serial_number"
                                    name="serial_number"
                                    type="text"
                                    placeholder="Type Something..."
                                    v-model="form.serial_number"
                                >
                            </div>
                            <div class="form-group">
                                <label for="asset_name">Asset name</label>
                                <input
                                    class="form-control"
                                    id="asset_name"
                                    name="asset_name"
                                    type="text"
                                    placeholder="Type Something..."
                                    v-model="form.asset_name"
                                >
                            </div>
                            <div class="form-group">
                                <label for="item_status_id">Asset status</label>
                                <v-select
                                    class="style-chooser"
                                    id="item_status_id"
                                    name="item_status_id"
                                    :options="statuses"
                                    placeholder="Select Something..."
                                    v-model="form.item_status_id"
                                >
                                </v-select>
                            </div>
                            <div class="form-group">
                                <label for="asset_group">Asset group</label>
                                <v-select
                                    class="style-chooser"
                                    id="asset_group"
                                    name="asset_group"
                                    :options="asset_groups"
                                    placeholder="Select Something..."
                                    v-model="form.asset_group"
                                ></v-select>
                            </div>
                            <div class="form-group">
                                <label for="asset_date">Asset date</label>
                                <VueDatePicker
                                    class="style-select-date"
                                    id="asset_date"
                                    name="asset_date"
                                    format="dd-MMM-yyyy"
                                    :enable-time-picker="false"
                                    placeholder="Select Date"
                                    v-model="form.asset_date"
                                ></VueDatePicker>
                            </div>
                            <div class="form-group">
                                <label for="objective">Objective</label>
                                <v-select
                                    class="style-chooser"
                                    id="objective"
                                    name="objective"
                                    :options="objectives"
                                    placeholder="Select Something..."
                                    v-model="form.objective"
                                ></v-select>
                            </div>
                            <div class="form-group">
                                <label for="project_service">Project service</label>
                                <v-select
                                    class="style-chooser"
                                    id="project_service"
                                    name="project_service"
                                    :options="projects"
                                    placeholder="Select Something..."
                                    v-model="form.project_service"
                                ></v-select>
                            </div>
                            <div class="form-group">
                                <label for="owner">Owner</label>
                                <v-select
                                    class="style-chooser"
                                    id="owner"
                                    name="owner"
                                    :options="staff_profiles"
                                    placeholder="Select Something..."
                                    v-model="form.owner"
                                ></v-select>
                            </div>
                            <div class="form-group">
                                <label for="department_owner">Department owner</label>
                                <v-select
                                    class="style-chooser"
                                    id="department_owner"
                                    name="department_owner"
                                    :options="departments"
                                    placeholder="Select Something..."
                                    v-model="form.department_owner"
                                ></v-select>
                            </div>
                            <div class="form-group">
                                <label for="location">Location</label>
                                <v-select
                                    class="style-chooser"
                                    id="location"
                                    name="location"
                                    :options="locations"
                                    placeholder="Select Something..."
                                    v-model="form.location"
                                ></v-select>
                            </div>
                            <div class="form-group">
                                <label for="asset_type">Asset type</label>
                                <v-select
                                    class="style-chooser"
                                    id="asset_type"
                                    name="asset_type"
                                    :options="item_types"
                                    placeholder="Select Something..."
                                    v-model="form.asset_type"
                                ></v-select>
                            </div>
                            <div class="form-group">
                                <label for="brand">Brand</label>
                                <v-select
                                    class="style-chooser"
                                    id="brand"
                                    name="brand"
                                    :options="brands"
                                    placeholder="Select Something..."
                                    v-model="form.brand"
                                ></v-select>
                            </div>
                            <div class="form-group">
                                <label for="generation">Generation</label>
                                <input
                                    class="form-control"
                                    id="generation"
                                    name="generation"
                                    type="text"
                                    placeholder="Type Something..."
                                    v-model="form.generation"
                                >
                            </div>
                            <div class="form-group">
                                <label for="ram_type">Ram type</label>
                                <v-select
                                    class="style-chooser"
                                    id="ram_type"
                                    name="ram_type"
                                    :options="ram_types"
                                    placeholder="Select Something..."
                                    v-model="form.ram_type"
                                ></v-select>
                            </div>
                            <div class="form-group">
                                <label for="ram_unit">Ram unit</label>
                                <input
                                    class="form-control"
                                    id="ram_unit"
                                    name="ram_unit"
                                    type="text"
                                    placeholder="Type Something..."
                                    v-model="form.ram_unit"
                                >
                            </div>
                            <div class="form-group">
                                <label for="asset_os">Asset os</label>
                                <v-select
                                    class="style-chooser"
                                    id="asset_os"
                                    name="asset_os"
                                    :options="operating_systems"
                                    placeholder="Select Something..."
                                    v-model="form.asset_os"
                                ></v-select>
                            </div>
                            <div class="form-group">
                                <label for="harddisk">Harddisk</label>
                                <v-select
                                    class="style-chooser"
                                    id="harddisk"
                                    name="harddisk"
                                    :options="harddisks"
                                    placeholder="Select Something..."
                                    v-model="form.harddisk"
                                ></v-select>
                            </div>
                            <input
                                role="button"
                                @click="saveForm"
                                class="btn btn-primary"
                                value="Submit"
                            />
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
</style>
