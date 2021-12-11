new Morris.Line({
    // ID of the element in which to draw the chart.
    element: 'myfirstchart',
    // Chart data records -- each entry in this array corresponds to a point on
    // the chart.
    data: [
      { m: '2021-06', value: 0 },
      { m: '2021-07', value: 0 },
      { m: '2021-08', value: 0 },
      { m: '2021-09', value: 0 },
      { m: '2021-10', value: 0 },
      { m: '2021-11', value: 516000 },
      { m: '2021-12', value: 687700 }
    ],
    // The name of the data record attribute that contains x-values.
    xkey: 'm',
    // A list of names of data record attributes that contain y-values.
    ykeys: ['value'],
    lineWidth: 1,
    // Labels for the ykeys -- will be displayed when you hover over the
    // chart.
    labels: ['Ganancias']
    
  });


  Morris.Area({
    element: 'graficaArea',
    data: [
      {x: '2010 Q4', y: 3, z: 7},
      {x: '2011 Q1', y: 3, z: 4},
      {x: '2011 Q2', y: null, z: 1},
      {x: '2011 Q3', y: 2, z: 5},
      {x: '2011 Q4', y: 8, z: 2},
      {x: '2012 Q1', y: 4, z: 4}
    ],
    xkey: 'x',
    ykeys: ['y', 'z'],
    lineWidth: 1,
    labels: ['Y', 'Z']
  });