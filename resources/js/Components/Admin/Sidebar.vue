<template>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
            <img src="../../../../storage/app/public/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="../../../../storage/app/public/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Alexander Pierce</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li v-for="menuItem in menuItems" class="nav-item">
                        <Link :href="route(menuItem.url)"
                              class="nav-link"
                              :class="{ 'active': $page.url === route(menuItem.url) }"
                        >
                            <i class="nav-icon" :class="menuItem.icon"></i>
                            <p> {{ menuItem.title }} </p>
                        </Link>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
export default {
    data: () =>({
        menuItems : [
            {title: 'Dashboard', url: 'admin.dashboard.index', icon: 'fas fa-tachometer-alt' },
            {title: 'Categories', url: 'admin.category.index', icon: 'fas fa-book' },
            {title: 'Colors', url: 'admin.color.index', icon: 'fas fa-palette' },
            // {title: 'Orders', url: 'admin.order.index', icon: 'fas fa-cart-arrow-down' },
            // {title: 'Reviews', url: 'admin.review.index', icon: 'fas fa-comment' },
            // {title: 'Tags', url: 'admin.tag.index', icon: 'fas fa-tag' },
            // {title: 'Product', url: 'admin.product.index', icon: 'fas fa-hamburger' },
            {title: 'Users', url: 'admin.user.index', icon: 'far fa-user' }
        ]
    }),
    components: {
        Link
    }
}
</script>
