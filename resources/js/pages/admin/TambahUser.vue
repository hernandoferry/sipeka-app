<script setup lang="ts">
import AppLayout from "@/layouts/AppLayout.vue";
import Input from "@/components/ui/input/Input.vue";
import Label from "@/components/ui/label/Label.vue";
import Button from "@/components/ui/button/Button.vue";
import {Alert,AlertDescription,AlertTitle} from "@/components/ui/alert/";
import { CheckCircle2Icon } from "lucide-vue-next";
import {
  Select,
  SelectContent,
  SelectItem,
  SelectTrigger,
  SelectValue,
} from '@/components/ui/select'
</script>

<template>
    <AppLayout>
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
                
                <div class="flex p-3 pl-5">
                    <div class="w-50 mt-2"><Label for="picture">Nama Lengkap</Label></div>
                    <div class="w-10">:</div>
                    <div class="w-100 float-none"><Input id="NmLkp" type="text" placeholder="conoh: Umar Khomarudin" /></div>
                </div>

                 <div class="flex p-3  pl-5">
                    <div class="w-50 mt-2"><Label for="picture">Email</Label></div>
                    <div class="w-10">:</div>
                    <div class="w-100 float-none"><Input id="mail" type="email" placeholder="conoh:inilah@contoh.co.id" /></div>
                </div>
                <div class="flex p-3 pl-5">
                    <div class="w-50 mt-2"><Label for="picture">Role</Label></div>
                    <div class="w-10">:</div>
                    <div class="w-50 float-none">

                          <Select>
                                <SelectTrigger>
                                <SelectValue placeholder="Select a role" />
                                </SelectTrigger>
                                <SelectContent>
                                    <SelectItem value="admin">
                                        Administrator
                                    </SelectItem>
                                    <SelectItem value="operator">
                                        Operator
                                    </SelectItem>
                                </SelectContent>
                         </Select>

                    </div>
                </div>
                <div class="flex justify-end w-150">
                    <div class="w-120 ml-[210px] mt-9"> <Button class="ml-13 bg-gray-400 hover:bg-gray-300">Simpan</Button> <Button class="ml-5 bg-red-500 hover:bg-red-700">Batal</Button></div>
                </div>
               
            </div>
        </div>
    </AppLayout>
</template>
