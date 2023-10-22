<script setup>
import autosize from "autosize";
import {onMounted} from "vue";
onMounted(() => {
    // component is now mounted.
    autosize(document.querySelector('textarea'));
})
</script>

<template>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Default form</h4>
                <p class="card-description">
                    Basic form layout
                </p>
                <form class="forms-sample">
                    <div class="form-group">
                        <label for="exampleInputUsername1">ชื่อ - สกุล</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="ชื่อ - สกุล">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ตำแหน่ง</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="ตำแหน่ง">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">สังกัด</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="สังกัด">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputConfirmPassword1">เบอร์โทรศัพท์</label>
                        <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="เบอร์โทรศัพท์">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Default select</label>
                        <select class="form-control" id="exampleFormControlSelect2">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                            Remember me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
