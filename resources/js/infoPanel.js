class InfoPanel
{
  constructor()
  {
    this.config = {
      animationTime: 200
    }
    this.addTriggerOpenPanel();
  }

  addTriggerClosePanel()
  {
    $('.app_header__hamburger').one('click', ()=> {
      let promise = new Promise((resolve, reject) => {
        $('.app_info_panel').animate(
          {left:'100vw'},
          this.config.animationTime,
          () => resolve()
        );
      });
      promise.then(() => {
        this.hidePanel();
        this.addTriggerOpenPanel();
      });
    });
  }

  hidePanel()
  {
    $('.app_info_panel').addClass('d-none')
      .removeClass('app_info_panel__visible')
      .removeAttr('style');
  }

  addTriggerOpenPanel()
  {
    $('.app_header__hamburger').one('click', () => {
      this.openPanel();
      this.addTriggerClosePanel();
    });
  }

  openPanel()
  {
    $('.app_info_panel').removeClass('d-none')
      .addClass('app_info_panel__visible')
      .animate(
        {left: ""},
        this.config.animationTime
    );
  }
}

$( () => {
  let infoPanel = new InfoPanel();
})
