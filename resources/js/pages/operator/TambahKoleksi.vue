<script setup lang="ts">
import AppLayout from "@/layouts/AppLayout.vue";
import Input from "@/components/ui/input/Input.vue";
import Label from "@/components/ui/label/Label.vue";
import Button from "@/components/ui/button/Button.vue";
import {Alert,AlertDescription,AlertTitle} from "@/components/ui/alert/";
import { CheckCircle2Icon,BookPlusIcon } from "lucide-vue-next";
import {
  Select,
  SelectContent,
  SelectItem,
  SelectTrigger,
  SelectValue,
} from '@/components/ui/select'
import { addMember} from '@/routes'
import { type BreadcrumbItem } from "@/types";

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: "Tambah koleksi",
        href: addMember.url(),
    },
];
</script>

<template>
    <AppLayout :breadcrumbs="breadcrumbs">
        <div
            class="flex h-full flex-1 flex-col overflow-x-auto rounded-xl p-4"
        >
            <Alert class="bg-emerald-300 mb-3">
                <CheckCircle2Icon />
                <AlertTitle>Success! Your changes have been saved</AlertTitle>
                <AlertDescription>
                    This is an alert with icon, title and description.
                </AlertDescription>
            </Alert>

            <div
                class="relative min-h-[100vh] flex-1 rounded-xl border border-sidebar-border/70 gap-0"
            >
                <div class="pl-5 pt-5 pb-7 flex">
                    <BookPlusIcon/>
                    <h6 class="font-bold text-2xl ml-4"> Form penambahan koleksi</h6>
                </div>
                <div class="flex p-3 pl-5">
                    <div class="w-50 mt-2"><Label for="picture">Judul Buku</Label></div>
                    <div class="w-10">:</div>
                    <div class="w-100 float-none"><Input id="NmLkp" type="text" placeholder="conoh: Umar Khomarudin" /></div>
                </div>

                <div class="flex p-3 pl-5">
                    <div class="w-50 mt-2"><Label for="picture">Pengarang</Label></div>
                    <div class="w-10">:</div>
                    <div class="w-100 float-none"><Input id="NmLkp" type="text" placeholder="conoh: Umar Khomarudin" /></div>
                </div>

                <div class="flex p-3 pl-5">
                    <div class="w-50 mt-2"><Label for="picture">Penerbit</Label></div>
                    <div class="w-10">:</div>
                    <div class="w-100 float-none"><Input id="NmLkp" type="text" placeholder="conoh: Umar Khomarudin" /></div>
                </div>

                <div class="flex p-3 pl-5">
                    <div class="w-50 mt-2"><Label for="picture">ISBN</Label></div>
                    <div class="w-10">:</div>
                    <div class="w-100 float-none"><Input id="NmLkp" type="text" placeholder="conoh: Umar Khomarudin" /></div>
                </div>

                <div class="flex p-3 pl-5">
                    <div class="w-50 mt-2"><Label for="picture">Jumlah halaman</Label></div>
                    <div class="w-10">:</div>
                    <div class="w-20 float-none"><Input id="NmLkp" type="text" placeholder="123" /></div>
                </div>

                <div class="flex p-3 pl-5">
                    <div class="w-50 mt-2"><Label for="picture">Tahun terbit</Label></div>
                    <div class="w-10">:</div>
                    <div class="w-20 float-none"><Input id="NmLkp" type="text" placeholder="YYYY" /></div>
                </div>

                <div class="flex p-3 pl-5">
                    <div class="w-50 mt-2"><Label for="picture">Cover buku</Label></div>
                    <div class="w-10">:</div>
                    <div class="w-100 float-none"><Input id="NmLkp" type="file"  /></div>
                </div>
                
                <div class="flex justify-end w-150">
                    <div class="w-120 ml-[210px] mt-9"> <Button class="ml-13 bg-blue-500 hover:bg-blue-700">Simpan</Button> <Button class="ml-5 bg-red-500 hover:bg-red-700">Batal</Button></div>
                </div>
               
            </div>
        </div>
    </AppLayout>
</template>
