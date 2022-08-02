const circularProgressBarData = [
  {
    id: 'circle_1',
    color: '#F9896B',
  },
  {
    id: 'circle_2',
    color: '#51459E',
  },
  {
    id: 'circle_3',
    color: '#51459E',
  },
];

function drawCircularProgressBars(data) {
  data.forEach((circularProgressElement) => {
    $(`#${circularProgressElement.id}`).circleProgress({
      value: 0.75,
      size: 70,
      fill: {
        color: `${circularProgressElement.color}`,
      },
      reverse: false,
      lineCap: 'round',
      thickness: 7,
    });
  });
}

drawCircularProgressBars(circularProgressBarData);
