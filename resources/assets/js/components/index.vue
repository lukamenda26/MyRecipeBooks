<template>
    <div class="form-group" id="vue">
        <label for="score" class="col-sm-2 control-label">評価</label>
        <div class="col-sm-2">
            <select name="score" class="form-control" v-model="score">
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
            </select>
        </div>
        <div class="col-sm-8">
            <p class="form-control scoreStars">@{{ showStar }}</p>
        </div>
    </div>
</template>

<script>
    const vue = new Vue({
        el: '#vue',
    })
    // const app = new Vue({
//     el: '#app'
// });
</script>
