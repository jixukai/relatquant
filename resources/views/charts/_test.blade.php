<div id="_test"></div>
    <script>
        function _test()
        {
            // 下面这段，是从数据库读取数据，json格式。再eval()一下，赋值给data，然后下面再引用data么？调试提示，下面的data没有被定义
            // $.post("{{ url('/chartdata') }}", {
            //         "_token": "{{ csrf_token() }}"
            //     }, function(json) {
            //     var data = eval(json);
            //     });
            function mmp()
            {
                $.post('/chartdata');
            }
            var data = mmp();
            window.document.data;


            // var ds = new DataSet();
            // var dv = ds.createView().source(data);//？调试提示，这里data没有被定义
            // // fold 方式完成了行列转换，如果不想使用 DataSet 直接手工转换数据即可
            // dv.transform({
            //     type: 'fold',
            //     fields: ['cpi', 'ppi'], // 展开字段集
            //     key: 'indexType', // key字段
            //     value: 'indexNumber' // value字段
            // });

            // var chart = new G2.Chart({
            //     container: '_test',
            //     forceFit: true,
            //     height: 300
            // });

            // chart.source(dv, {
            //     date: {
            //         range: [0, 1]
            //     }
            // });
            
            // chart.tooltip({
            //     crosshairs: {
            //         type: 'line'
            //     }
            // });

            // chart.axis('indexNumber', {
            //     label: {
            //         formatter: function formatter(val) {
            //         return val + '%';
            //         }
            //     }
            // });

            // chart.line().position('date*indexNumber').color('indexType').shape('smooth');

            // chart.point().position('date*indexNumber').color('indexType').size(4).shape('circle').style({
            //     stroke: '#fff',
            //     lineWidth: 1
            // });

            // chart.render();

        };

        _test();
    </script>
