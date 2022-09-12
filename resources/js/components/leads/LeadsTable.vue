<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" v-for="(page, i) in pages_counter" :key="'mi-'+i">{{page}}</div>
                    <div class="card-body" v-for="(link, i) in links" :key="'mi-'+i">
                        {{ link }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['pages_counter', 'links']
    }
</script>
