<script setup>
import {ref} from 'vue';

import VSelect from 'vue-select'
import '../../css/vue-select.css';

import VueDatePicker from '@vuepic/vue-datepicker';

const props = defineProps({
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

const asset_status = [
    {id: 'กำลังใช้งาน', label: 'กำลังใช้งาน'},
    {id: 'เสียรอดำเนินการ', label: 'เสียรอดำเนินการ'},
    {id: 'รอส่งจำหน่าย', label: 'รอส่งจำหน่าย'},
    {id: 'รอส่งซ่อม', label: 'รอส่งซ่อม'},
    {id: 'กำลังเคลม', label: 'กำลังเคลม'},
    {id: 'จำหน่าย', label: 'จำหน่าย'},
]

const asset_groups = [
    {id: 'Buy', label: 'Buy'},
    {id: 'Lease', label: 'Lease'},
]

const ram_types = [
    {id: 'DDR3', label: 'DDR3'},
    {id: 'DDR4', label: 'DDR4'},
]

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
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="serial_number">Serial number</label>
                                <input
                                    class="form-control"
                                    id="serial_number"
                                    name="serial_number"
                                    type="text"
                                    placeholder="Type Something..."
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="asset_name">Asset name</label>
                                <input
                                    class="form-control"
                                    id="asset_name"
                                    name="asset_name"
                                    type="text"
                                    placeholder="Type Something..."
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="asset_status">Asset status</label>
                                <v-select
                                    class="style-chooser"
                                    id="asset_status"
                                    name="asset_status"
                                    :options="asset_status"
                                    placeholder="Select Something..."
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
                                ></v-select>
                            </div>
                            <div class="form-group">
                                <label for="asset_date">Asset date</label>
                                <VueDatePicker
                                    id="asset_date"
                                    name="asset_date"
                                    v-model="date"
                                    format="dd-MMM-yyyy"
                                    :enable-time-picker="false"
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
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="ram_type">Ram type</label>
                                <v-select
                                    class="style-chooser"
                                    id="ram_type"
                                    name="ram_type"
                                    :options="ram_types"
                                    placeholder="Select Something..."
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
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="asset_os">Asset os</label>
                                <v-select
                                    class="style-chooser"
                                    id="asset_os"
                                    name="asset_os"
                                    :options="operating_systems"
                                    placeholder="Select Something..."
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
                                ></v-select>
                            </div>
                            <input class="btn btn-primary" type="submit" value="Submit">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
</style>
