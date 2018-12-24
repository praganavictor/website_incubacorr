<template>
    <v-container fluid>
        <v-layout>
            <h1>Menu Page</h1>
            <v-card-actions v-if="['menu'].includes($route.name)">
            <v-btn outline block color="green" @click="showRecipes('vegan')">Select This Plan</v-btn>
            </v-card-actions>
        </v-layout>
    </v-container>
</template>
<script>
export default {
    name: 'Menu'
};
</script>
<style scoped>
</style>