<template>
    <nav class="bg-indigo-400 flex justify-evenly p-4">
        <div>
            <Link href="/" class="text-x1 text-white">
                logo
            </Link>
        </div>
        <div>
            <Link href="/chat" class="text-x1 text-white mr-6 hover:bg-white hover:text-indigo-400 px-4 py-2 rounded-3x1">
                chat
            </Link>
            <Link href="/contacto" class="text-x1 text-white mr-6 hover:bg-white hover:text-indigo-400 px-4 py-2 rounded-3x1">
                contacto
            </Link>
        </div>
    </nav>
</template>
<script>
import { Link } from "@inertiajs/inertia-vue3";
export default{
    components:{
        Link,
    }
}

</script>
<style>

</style>
