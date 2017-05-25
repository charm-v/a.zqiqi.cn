<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <style>
            .a{
                border-bottom: 3px solid #dbdbdb;
            }
        </style>
    </head>
    <body>


        <div id="app">
            <div v-for="item of tasks" class="a">
                <p>
                    <span v-text="item.bigtxt"></span>
                </p>
                <p>
                    <span v-text="item.smtxt"></span>
                </p>
                <p>
                    <span v-text="addtion($index)"></span>
                    {{--<span v-if="item.state">+</span>--}}
                    {{--<span v-else="item.state">-</span>--}}
                    {{--<span v-text="item.rwjc"></span>--}}
                </p>
            </div>
        </div>

        <script src="http://petos.petnut.cn/webpos_free/templates/default/js/jquery-2.0.3.min.js"></script>
        <script src="http://petos.petnut.cn/webpos_free/templates/default/js/vue.min.js"></script>
        <script src="http://petos.petnut.cn/webpos_free/templates/default/js/vue-resource.min.js"></script>
        <script>
            var test = new Vue({
                el : '#app',
                data: {
                    tasks:[]
                },
                methods : {
                    addtion : function(index){
                        if(this.tasks[index].state){
                            return '+' + this.tasks[index].rwjc;
                        }else{
                            return '-' + this.tasks[index].rwjc;
                        }
                    }
                },
                ready : function(){
                    //请求后台数据
                    this.$http.get('http://a.zqiqi.cn/test').then(function(response){
                        console.log(response);
                        this.tasks = response.data;
                    })
                }
            })
        </script>

    </body>
</html>
