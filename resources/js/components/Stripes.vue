<template>
    <div>
        <hr class="g">
        <hr class="w">
        <hr class="y">
        <hr class="w">
        <hr class="r">
    </div>
</template>

<script>
export default {
  name: 'Stripes'
}
</script>

<style scoped>
hr.g {
    background-color:rgb(15, 233, 15);
    height:4px;
    width:100%;
    margin:0px;
    padding:0;
}
hr.y {
    background-color:orange;
    height:4px;
    width:90%;
    margin:auto;
    padding:0;
}
hr.r {
    background-color:red;
    height:4px;
    width:80%;
    margin:auto;
    padding:0;
}
hr.w {
    background-color:white;
    height:4px;
    width:100%;
    margin:0px;
    padding:0;
}
</style>