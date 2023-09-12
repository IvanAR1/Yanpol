import * as Particles from 'particlesjs';
$("document").ready(()=>{
    Particles.init({
        selector: '#particles-js',
        color: ['#DA0463', '#404B69', '#DBEDF3'],
        connectParticles: true,
        speed:1.3,
        minDistance:120,
        sizeVariations:2,
        responsive:[{
            breakpoint: 1024,
            options:{
                "maxParticles": 400,
                connectParticles:false
            },
            breakpoint: 768,
            options:{
                "maxParticles": 250,
            },
            breakpoint: 480,
            options:{
                "maxParticles": 100,
                connectParticles: false
            }
        }]
    });
})