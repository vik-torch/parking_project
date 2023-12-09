class Steps
{
  constructor()
  {
    this.currentStep = 1;
    this.init();
    this.setStepsColor();
  }

  init()
  {
    let path = location.pathname;
    switch(path) {
      case '/pay':
        this.currentStep = 2;
        break;
      case '/pay/loyalty':
      case '/pay/card':
        this.currentStep = 3;
        break;
      case '/pay/success':
        this.currentStep = 4;
        break;
    }
  }

  /**
   *  Установка цвета блока шага
   */
  setStepsColor()
  {
    let {currentStep} = this;
    for(let step=2; step <= currentStep; step++)
    {
      $(`.parking_step[data-step=${step}]`).addClass('step_active');
    }
  }
}

$( () => {
  var steps = new Steps()
})
