var vue = new Vue({
    el: "#vue",
    data: {
        score: 5
    },
    computed: {
        showStar: function() {
            if (this.score == 5) {
                return "★★★★★"
            } else if (this.score == 4) {
                return "★★★★"
            } else if (this.score == 3) {
                return "★★★"
            } else if (this.score == 2) {
                return "★★"
            } else {
                return "★"
            }
        }
    }
})