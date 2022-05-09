
        
        const progressbarThumb = document.querySelector('.progressbar__thumb');
        const progressbarPercent = document.querySelector('.progressbar__percent > tspan');
        const progressbarText = document.querySelector('.progressbar__info > tspan');

        function onUpdateGsap() {
            const percent = gsap.getProperty(progressbarThumb, '--percent');

            if (percent > 99) {
                progressbarText.textContent = 'Успешно';
            } else if (percent > 60 && percent < 99) {
                progressbarText.textContent = 'Формирование плана тренировок';
            } else if (percent > 40 && percent < 60) {
                progressbarText.textContent = 'Конфертация документа';
            } else if (percent > 0 && percent < 40) {
                progressbarText.textContent = 'Обработка данных ...'
            }
            progressbarPercent.textContent = Math.round(percent);
        }

        const tl = gsap.timeline({
                defaults: {
                    duration: 5,
                    ease: 'linear'
                }
            })
            .to(progressbarThumb, {
                '--percent': 100,
                onUpdate: onUpdateGsap
            });
