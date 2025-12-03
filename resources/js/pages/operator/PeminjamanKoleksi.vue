<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import Input from '@/components/ui/input/Input.vue';
import Button from '@/components/ui/button/Button.vue';
import { SearchIcon,BookOpenCheckIcon } from 'lucide-vue-next';
import { cariMember } from '@/routes';
import { type BreadcrumbItem } from "@/types";


const breadcrumbs: BreadcrumbItem[] = [
    {
        title: "Peminjaman",
        href: cariMember.url(),
    },
];
</script>

<template>
    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col overflow-x-auto rounded-xl p-4">
             <div class="relative min-h-[100vh] flex-1 rounded-xl border border-sidebar-border/70 gap-0">
                <div class="flex pl-5 pt-5">
                    <BookOpenCheckIcon/>
                    <h6 class="font-bold ml-4 text-2xl">Peminjaman koleksi</h6>
                </div>
                <div class="flex p-5">
                    <Input class="w-100" type="text" placeholder="masukan id anggota" />
                    <Button class="ml-5 font-bold">Cari <SearchIcon/></Button>
                </div>
               
             </div>
        </div>

    </AppLayout>

</template>