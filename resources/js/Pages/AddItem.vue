<script setup>
import VSelect from 'vue-select'
import '../../css/vue-select.css';

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
                                <label for="cname">Name (required, at least 2 characters)</label>
                                <input id="cname" class="form-control" name="name" minlength="2" type="text" required>
                            </div>
                            <div class="form-group">
                                <label for="cname">Name (required, at least 2 characters)</label>
                                <input id="cname" class="form-control" name="name" minlength="2" type="text" required>
                            </div>
                            <div class="form-group">
                                <label for="cname">Name (required, at least 2 characters)</label>
                                <input id="cname" class="form-control" name="name" minlength="2" type="text" required>
                            </div>
                            <div class="form-group">
                                <label for="curl">URL (optional)</label>
                                <v-select :options="['Canada', 'United States']"></v-select>
                            </div>
                            <div class="form-group">
                                <label for="curl">URL (optional)</label>
                                <v-select :options="['Canada', 'United States']"></v-select>
                            </div>
                            <div class="form-group">
                                <label for="cname">Name (required, at least 2 characters)</label>
                                <input id="cname" class="form-control" name="name" minlength="2" type="date" required>
                            </div>
                            <div class="form-group">
                                <label for="curl">URL (optional)</label>
                                <v-select :options="['Canada', 'United States']"></v-select>
                            </div>
                            <div class="form-group">
                                <label for="curl">URL (optional)</label>
                                <v-select :options="['Canada', 'United States']"></v-select>
                            </div>
                            <div class="form-group">
                                <label for="curl">URL (optional)</label>
                                <v-select :options="['Canada', 'United States']"></v-select>
                            </div>
                            <div class="form-group">
                                <label for="curl">URL (optional)</label>
                                <v-select :options="['Canada', 'United States']"></v-select>
                            </div>
                            <div class="form-group">
                                <label for="curl">URL (optional)</label>
                                <v-select :options="['Canada', 'United States']"></v-select>
                            </div>
                            <div class="form-group">
                                <label for="curl">URL (optional)</label>
                                <v-select :options="['Canada', 'United States']"></v-select>
                            </div>
                            <div class="form-group">
                                <label for="curl">URL (optional)</label>
                                <v-select :options="['Canada', 'United States']"></v-select>
                            </div>
                            <div class="form-group">
                                <label for="cname">Name (required, at least 2 characters)</label>
                                <input id="cname" class="form-control" name="name" minlength="2" type="date" required>
                            </div>
                            <div class="form-group">
                                <label for="curl">URL (optional)</label>
                                <v-select :options="['Canada', 'United States']"></v-select>
                            </div>
                            <div class="form-group">
                                <label for="cname">Name (required, at least 2 characters)</label>
                                <input id="cname" class="form-control" name="name" minlength="2" type="date" required>
                            </div>
                            <div class="form-group">
                                <label for="curl">URL (optional)</label>
                                <v-select :options="['Canada', 'United States']"></v-select>
                            </div>
                            <div class="form-group">
                                <label for="curl">URL (optional)</label>
                                <v-select :options="['Canada', 'United States']"></v-select>
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
