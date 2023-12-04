var stepsConfig = [
  {
    placeData: '1'
  },
  {
    placeData: '2'
  },
  {
    placeData: '3'
  },
  {
    placeData: '4'
  },
];

class Steps
{
  constructor(config)
  {
    this.config = config;
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
        this.currentStep = 3;
        break;
    }
  }

  /**
   *  Установка цвета блока шага
   */
  setStepsColor()
  {
    // сделать здесь закрашивание всех предыдущих шагов
    let step = this.currentStep
    $(`.parking_step[data-step=${step}]`).addClass('step_active');
  }
}

$( () => {
  var steps = new Steps(stepsConfig)
})
