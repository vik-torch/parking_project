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
    }
  }

  /**
   *  Установка цвета блока шага
   */
  setStepsColor()
  {
    let step = this.currentStep
    $(`.parking_step[data-step=${step}]`).addClass('step_active');
  }
}

$( () => {
  var steps = new Steps(stepsConfig)
})
