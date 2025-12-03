<script setup lang="ts">
import { ref} from "vue";
import type { DateValue } from '@internationalized/date'
import AppLayout from "@/layouts/AppLayout.vue";
import Label from "@/components/ui/label/Label.vue";
import Input from "@/components/ui/input/Input.vue";
import Button from "@/components/ui/button/Button.vue";
import {Select,SelectTrigger,SelectValue,SelectContent,SelectItem} from "@/components/ui/select"; 



import { getLocalTimeZone, today } from '@internationalized/date'
import { CalendarIcon,PlusCircleIcon} from 'lucide-vue-next'
import { Calendar } from '@/components/ui/calendar'
import {
  Popover,
  PopoverContent,
  PopoverTrigger,
} from '@/components/ui/popover'
import { type BreadcrumbItem } from "@/types";
import { addMember } from '@/routes';
const date = ref(today(getLocalTimeZone())) as Ref<DateValue>

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: "Tambah anggota",
        href: addMember.url(),
    },
];

</script>

<template>
    <AppLayout :breadcrumbs="breadcrumbs">

         <div class="flex h-full flex-1 flex-col overflow-x-auto rounded-xl p-4">
             <div class="relative min-h-[100vh] flex-1 rounded-xl border border-sidebar-border/70 gap-0">
                
                <div class="flex m-5 mb-7">
                    <PlusCircleIcon/>
                    <h6 class="font-bold pl-4 text-2xl  ">Form tambah anggota perpustakaan</h6>
                </div>
                
                <div class="flex p-3 pl-5">
                    <div class="w-50 mt-2"><Label for="picture">ID Anggota</Label></div>
                    <div class="w-10">:</div>
                    <div class="w-100 float-none"><Input id="NmLkp" type="text" placeholder="conoh: 009899876" /></div>
                </div>
                <div class="flex p-3 pl-5">
                    <div class="w-50 mt-2"><Label for="picture">Nama Lengkap</Label></div>
                    <div class="w-10">:</div>
                    <div class="w-100 float-none"><Input id="NmLkp" type="text" placeholder="conoh: Umar Khomarudin" /></div>
                </div>
                 <div class="flex p-3 pl-5">
                    <div class="w-50 mt-2"><Label for="picture">Jenis Kelamin</Label></div>
                    <div class="w-10">:</div>
                    <div class="w-50 float-none">
                        <Select>
                                <SelectTrigger>
                                <SelectValue placeholder="Pilih" />
                                </SelectTrigger>
                                <SelectContent>
                                    <SelectItem value="L">
                                        Laki-Laki
                                    </SelectItem>
                                    <SelectItem value="P">
                                        Perempuan
                                    </SelectItem>
                                </SelectContent>
                         </Select>
                    </div>
                </div>
                 <div class="flex p-3 pl-5">
                    <div class="w-50 mt-2"><Label for="picture">No.Hp/Telp</Label></div>
                    <div class="w-10">:</div>
                    <div class="w-100 float-none"><Input id="NmLkp" type="text" placeholder="contoh:088323878444" /></div>
                </div>
                <div class="flex p-3 pl-5">
                    <div class="w-50 mt-2"><Label for="picture">Email</Label></div>
                    <div class="w-10">:</div>
                    <div class="w-100 float-none"><Input id="NmLkp" type="email" placeholder="contoh:anggota123@perpus.co.sch" /></div>
                </div>
                <div class="flex p-3 pl-5">
                    <div class="w-50 mt-2"><Label for="picture">Tempat lahir</Label></div>
                    <div class="w-10">:</div>
                    <div class="w-50 float-none"><Input id="NmLkp" type="text" placeholder="contoh:bandung" /></div>

                    <div class="w-50 mt-2 ml-5"><Label for="picture">Tanggal Lahir</Label></div>
                    <div class="w-10">:</div>
                    <div class="w-50 float-none">
                             <Popover v-slot="{ close }">
                                <PopoverTrigger as-child>
                                    <Button
                                    id="date"
                                    variant="outline"
                                    class="w-48 justify-between font-normal"
                                    >
                                    <CalendarIcon  />
                                    {{ date ? date.toDate(getLocalTimeZone()).toLocaleDateString() : "Select date" }}
                                    
                                    </Button>
                                </PopoverTrigger>
                                <PopoverContent class="w-auto overflow-hidden p-0" align="start">
                                    <Calendar
                                    :model-value="date"
                                    layout="month-and-year"
                                    @update:model-value="(value) => {
                                        if (value) {
                                        date = value
                                        close()
                                        }
                                    }"
                                    />
                                </PopoverContent>
                            </Popover>
    
                    </div>
                </div>

                <div class="flex p-3 pl-5">
                    <div class="w-50 mt-2"><Label for="picture">Jurusan</Label></div>
                    <div class="w-10">:</div>
                    <div class="w-50 float-none">
                        <Select>
                                <SelectTrigger>
                                <SelectValue placeholder="Pilih" />
                                </SelectTrigger>
                                <SelectContent>
                                    <SelectItem value="L">
                                        Tahsin
                                    </SelectItem>
                                    <SelectItem value="P">
                                        Bahasa Arab
                                    </SelectItem>
                                </SelectContent>
                         </Select>
                    </div>
                </div>
                <div class="ml-60">
                    <Button class="bg-blue-500 hover:bg-blue-700 m-5"> Simpan</Button>
                    <Button class="bg-red-500 hover:bg-red-700 m-5"> Batal</Button>
                </div>
             </div>
         </div>
         
    </AppLayout>

</template>