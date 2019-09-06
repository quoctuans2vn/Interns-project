var snapSlider = document.getElementById('slider-snap');

noUiSlider.create(snapSlider, {
    start: [40, 110],
    snap: false,
    connect: true,
    step: 1,
    range: {
        'min': 0,
        'max': 250
    }
});
var snapValues = [
    document.getElementById('slider-snap-value-start'),
    document.getElementById('slider-snap-value-end')
];
var inputValues = [
    document.getElementById('slider-snap-input-start'),
    document.getElementById('slider-snap-input-end')
];
snapSlider.noUiSlider.on('update', function (values, handle) {
    snapValues[handle].innerHTML = values[handle];
});

snapSlider.noUiSlider.on('change', function (values, handle) {
    inputValues[handle].value = values[handle];
});