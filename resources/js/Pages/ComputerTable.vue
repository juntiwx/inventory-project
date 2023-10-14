<script setup>
defineProps({
    asset_computers: {type: Object, required: true}
})
</script>

<template>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data table</h4>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                            <tr>
                                <th>No #</th>
                                <th>asset_number</th>
                                <th>serial_number</th>
                                <th>asset_name</th>
                                <th>asset_status</th>
                                <th>asset_group</th>
                                <th>asset_date</th>
                                <th>objective</th>
                                <th>project_service</th>
                                <th>owner</th>
                                <th>department_owner</th>
                                <th>location</th>
                                <th>asset_type</th>
                                <th>brand</th>
                                <th>generation</th>
                                <th>ram_type</th>
                                <th>ram_unit</th>
                                <th>asset_os</th>
                                <th>harddisk</th>

                            </tr>
                            </thead>
                            <tbody>
                            <template v-for="asset_computer in asset_computers">
                                <tr>
                                    <td>{{ asset_computer['id'] }}</td>
                                    <td>{{ asset_computer['asset_number'] }}</td>
                                    <td>{{ asset_computer['serial_number'] }}</td>
                                    <td>{{ asset_computer['asset_name'] }}</td>
                                    <td>{{ asset_computer['asset_status'] }}</td>
                                    <td>{{ asset_computer['asset_group'] }}</td>
                                    <td>{{ asset_computer['asset_date'] }}</td>
                                    <td>{{ asset_computer['objective'] }}</td>
                                    <td>{{ asset_computer['project_service'] }}</td>
                                    <td>{{ asset_computer['owner'] }}</td>
                                    <td>{{ asset_computer['department_owner'] }}</td>
                                    <td>{{ asset_computer['location'] }}</td>
                                    <td>{{ asset_computer['asset_type'] }}</td>
                                    <td>{{ asset_computer['brand'] }}</td>
                                    <td>{{ asset_computer['generation'] }}</td>
                                    <td>{{ asset_computer['ram_type'] }}</td>
                                    <td>{{ asset_computer['ram_unit'] }}</td>
                                    <td>{{ asset_computer['asset_os'] }}</td>
                                    <td>{{ asset_computer['harddisk'] }}</td>
                                    <!-- <td>
                                   <label class="badge badge-info">On hold</label>
                                </td>
                                    <td>
                                        <button class="btn btn-outline-primary">View</button>
                                    </td>-->
                                </tr>
                            </template>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
