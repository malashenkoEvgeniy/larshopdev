<template>
    <Layout>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Colors Table</h3>
            </div>
            <div class="col-2">
                <Link :href="route('admin.color.create')" class="btn btn-primary my-2 block" >Создать</Link>
            </div>
            <div v-if="colors.total > 0">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Title</th>
                            <th>Color</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="color in colors.data" :key="color.id">
                            <td>{{  color.id }}</td>
                            <td>{{ color.title }}</td>
                            <td><div class="p-3" :style="{ 'background-color':  color.title }"></div></td>
                            <td>
                                <Link :href="route('admin.color.edit', color.id)" class="btn btn-info btn-sm float-left mr-1">
                                    <i class="fas fa-pencil-alt"></i>
                                </Link>

                                <a class="btn btn-danger btn-sm"
                                   @click="destroy(color.id)">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <Pagination :links="colors.links" />


            </div>
            <div v-else class="text-center font-bold text-xl">
                Colors are absent
            </div>
        </div>
    </Layout>
</template>

<script>
import Layout from  '@/Layouts/Admin'
import {Link} from "@inertiajs/inertia-vue3";
import Pagination from '@/Components/Admin/Pagination'
export default {
    props: {
        colors: Array
    },
    components: {
        Pagination, Link
    },
    methods: {
        destroy(id) {
            if(confirm('Подтвердите удаление?')) {
                this.$inertia.delete(route('admin.color.destroy', id))
            }
        }
    },
    layout: Layout

}
</script>
