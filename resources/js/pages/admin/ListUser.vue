<script setup lang="ts" generic="TData, TValue">
import AppLayout from "@/layouts/AppLayout.vue";
import { Head } from "@inertiajs/vue3";
import { type BreadcrumbItem } from "@/types";
import { listuser } from "@/routes";

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: "Daftar users",
        href: listuser.url(),
    },
];
</script>

<template>
    <Head title="Daftar user" />
    <AppLayout :breadcrumbs="breadcrumbs">
        <div
            class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4"
        >
            <div
                class="relative min-h-[100vh] flex-1 rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border"
            >
                <div
                    class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default m-3"
                >
                    <table
                        class="w-full text-sm text-left rtl:text-right text-body"
                    >
                        <thead
                            class="text-sm text-body bg-neutral-secondary-medium border-b border-default-medium"
                        >
                            <tr>
                                <th scope="col" class="px-6 py-3 font-medium">
                                    Product name
                                </th>
                                <th scope="col" class="px-6 py-3 font-medium">
                                    Color
                                </th>
                                <th scope="col" class="px-6 py-3 font-medium">
                                    Category
                                </th>
                                <th scope="col" class="px-6 py-3 font-medium">
                                    Price
                                </th>
                                <th scope="col" class="px-6 py-3 font-medium">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                class="bg-neutral-primary-soft border-b border-default hover:bg-neutral-secondary-medium"
                            >
                                <th
                                    scope="row"
                                    class="px-6 py-4 font-medium text-heading whitespace-nowrap"
                                >
                                    Apple MacBook Pro 17"
                                </th>
                                <td class="px-6 py-4">Silver</td>
                                <td class="px-6 py-4">Laptop</td>
                                <td class="px-6 py-4">$2999</td>
                                <td class="px-6 py-4 text-right">
                                    <a
                                        href="#"
                                        class="font-medium text-fg-brand hover:underline"
                                        >Edit</a
                                    >
                                </td>
                            </tr>
                            <tr
                                class="bg-neutral-primary-soft border-b border-default hover:bg-neutral-secondary-medium"
                            >
                                <th
                                    scope="row"
                                    class="px-6 py-4 font-medium text-heading whitespace-nowrap"
                                >
                                    Microsoft Surface Pro
                                </th>
                                <td class="px-6 py-4">White</td>
                                <td class="px-6 py-4">Laptop PC</td>
                                <td class="px-6 py-4">$1999</td>
                                <td class="px-6 py-4 text-right">
                                    <a
                                        href="#"
                                        class="font-medium text-fg-brand hover:underline"
                                        >Edit</a
                                    >
                                </td>
                            </tr>
                            <tr
                                class="bg-neutral-primary-soft hover:bg-neutral-secondary-medium"
                            >
                                <th
                                    scope="row"
                                    class="px-6 py-4 font-medium text-heading whitespace-nowrap"
                                >
                                    Magic Mouse 2
                                </th>
                                <td class="px-6 py-4">Black</td>
                                <td class="px-6 py-4">Accessories</td>
                                <td class="px-6 py-4">$99</td>
                                <td class="px-6 py-4 text-right">
                                    <a
                                        href="#"
                                        class="font-medium text-fg-brand hover:underline"
                                        >Edit</a
                                    >
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
