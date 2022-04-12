<template>
    <div>
        <p>Heute ist der {{ date | formatDate }}</p>
        <p>Heute ist der {{ date | formatDate("tr-TR") }}</p>
    </div>
</template>

<script>
export default {
    filters: {
        formatDate(input, format) {
            return input.toLocaleDateString(format || "tr");
        }
    },
    data() {
        return {
            date: new Date()
        };
    }
};
</script>

<style></style>
