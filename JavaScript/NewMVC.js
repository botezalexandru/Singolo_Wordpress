var ListPhotos = function (el) {

    this.el = el;
    _this = this;


};


ListPhotos.prototype.fade = function (group) {
    this.el.find('li').not(group).fadeOut().promise().done(function () {
        $('.portofolio_pictures ' + group).fadeIn();
    });
};

ListPhotos.prototype.onClick = function (event) {
    this.fade(event.target.value);

};


var FilterPhotos = function (el) {
    this.el = el;
    _this = this;


    this.el.click(function () {
        _this.el.trigger('filter', $(this).val());

    });


};


var Portofolio = function (el) {

    this.el = el;
    var _this = this;

    this.input = $('input[name$="group1"]');
    this.portofolioPictures = $('.portofolio_pictures');
    this.photoUrl = "Images/Portofolio/portofolio_";
    this.photoExtension = ".png";
    this.filterClasses = ["webdesign-filter", "graphicsdesign-filter", "artwork-filter"];


    

    this.filterPhotos = new FilterPhotos(this.input, this.el);
    this.listPhotos = new ListPhotos(this.portofolioPictures, this.el);


    this.el.on('filter', function (event, photoValue) {
        console.log(photoValue);
        
        _this.onFilter(photoValue);
    });

};


Portofolio.prototype.onFilter = function (wtfvalue) {
    this.listPhotos.fade(wtfvalue);
};


$(function () {
    var portofolio = new Portofolio($('.portofolio'));

});