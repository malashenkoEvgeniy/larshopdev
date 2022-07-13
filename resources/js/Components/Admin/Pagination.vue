<template>
    <div v-if="links.length > 3" class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
            <li v-for="(link, k) in links" :key="k" class="page-item">
                <Link class="page-link"
                      v-html="link.label"
                      :href="link.url"
                      :class="{'active-btn':link.active, 'disabled-btn': link.url === null }"
                      :disabled="link.url === null"
                ></Link>
            </li>
        </ul>
    </div>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";
 export default {
     components: {
       Link
     },
     props: {
         links: Array
     }
 }
</script>
<style>
.active-btn {
    color: white;
    background-color: #2563eb;
}

.disabled-btn {
    color: white;
    background-color: #ccc;
}
</style>

