<script setup lang="ts">
import NavFooter from "@/components/NavFooter.vue";
import NavMain from "@/components/NavMain.vue";
import NavUser from "@/components/NavUser.vue";
import {
    Sidebar,
    SidebarContent,
    SidebarFooter,
    SidebarHeader,
    SidebarMenu,
    SidebarMenuButton,
    SidebarMenuItem,
} from "@/components/ui/sidebar";
import { dashboard } from "@/routes";
import { type NavItem } from "@/types";
import { Link } from "@inertiajs/vue3";
import {
    BookA,
    BookOpen,
    DatabaseIcon,
    Folder,
    LucideLayoutDashboard,
    RepeatIcon,
    User2Icon,
} from "lucide-vue-next";
import AppLogo from "./AppLogo.vue";
import NavSingle from "./NavSingle.vue";

const data = {
    navMain: [
        {
            title: "Master Data",
            url: "#",
            icon: DatabaseIcon,
            isActive: true,
            items: [
                {
                    title: "Koleksi",
                    url: "#",
                },
                {
                    title: "Jurusan",
                    url: "#",
                },
                
                
            ],
        },
        {
            title: "Keanggotaan",
            url: "#",
            icon: User2Icon,
            isActive: true,
            items: [
                {
                    title: "Cari anggota",
                    url: "#",
                },
                {
                    title: "Tambah anggota",
                    url: "#",
                },
                
                
            ],
        },

        {
            title: "Transaksi",
            url: "#",
            icon: RepeatIcon,
            isActive: true,
            items: [
                {
                    title: "Peminjaman",
                    url: "#",
                },
                {
                    title: "Pengembalian",
                    url: "#",
                },
            ],
        },
        {
            title: "Laporan",
            url: "#",
            icon: BookA,
            isActive: true,
            items: [
                {
                    title: "Peminjaman",
                    url: "#",
                },
                {
                    title: "Pengembalian",
                    url: "#",
                },
                {
                    title: "Buku",
                    url: "#",
                },
                {
                    title: "Denda",
                    url: "#",
                },
            ],
        },
    ],
    projects: [
        {
            name: "Dashboard",
            url: "#",
            icon: LucideLayoutDashboard,
        },
    ],
};

const footerNavItems: NavItem[] = [
    {
        title: "Github Repo",
        href: "https://github.com/laravel/vue-starter-kit",
        icon: Folder,
    },
    {
        title: "Documentation",
        href: "https://laravel.com/docs/starter-kits#vue",
        icon: BookOpen,
    },
];
</script>

<template>
    <Sidebar collapsible="icon" variant="inset">
        <SidebarHeader>
            <SidebarMenu>
                <SidebarMenuItem>
                    <SidebarMenuButton size="lg" as-child>
                        <Link :href="dashboard()">
                            <AppLogo />
                        </Link>
                    </SidebarMenuButton>
                </SidebarMenuItem>
            </SidebarMenu>
        </SidebarHeader>

        <SidebarContent>
            <NavSingle :singleMenu="data.projects" />
            <NavMain :items="data.navMain" />
        </SidebarContent>

        <SidebarFooter>
            <NavFooter :items="footerNavItems" />
            <NavUser />
        </SidebarFooter>
    </Sidebar>
    <slot />
</template>
