<div id='cpi_ppi'></div>
<script>
function chartType_1(indexA, indexB, SymbolType, divId)
{
    
  var callback = function(data) {
  var datax = eval(data);
  var ds = new DataSet();
  var dv = ds.createView().source(datax);
  // fold 方式完成了行列转换，如果不想使用 DataSet 直接手工转换数据即可
  dv.transform({
  type: 'fold',
  fields: [indexA, indexB], // 展开字段集
  key: 'indexType', // key字段
  value: 'indexNumber' // value字段
  });

  var chart = new G2.Chart({
  container: divId,
  forceFit: true,
  height: 300
  });

  chart.source(dv, {
  date: {
  range: [0, 1]
  }
  });

  chart.tooltip({
  crosshairs: {
  type: 'line'
  }
  });

  chart.axis('indexNumber', {
  label: {
  formatter: function formatter(val) {
  return val + SymbolType;
  }
  }
  });

  chart.line().position('date*indexNumber').color('indexType').shape('smooth');

  chart.point().position('date*indexNumber').color('indexType').size(4).shape('circle').style({
  stroke: '#fff',
  lineWidth: 1
  });

  chart.render();
  };


  function chartGo()
  {
  $.post("{{ url('/chartdata') }}", {
  "_token": "{{ csrf_token() }}"
  }, callback);
  }

  chartGo();
}

chartType_1('cpi', 'ppi', '%', 'cpi_ppi');
</script>
