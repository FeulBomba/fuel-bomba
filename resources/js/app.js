import './bootstrap';

import { Fuel } from 'fuels';
import { defaultConnectors } from '@fuels/connectors';

const fuel = new Fuel({
  connectors: defaultConnectors({ devMode: true }),
});
// if there is a account connected hide connect btns and show address and disconnect btn


// const connectionState = await fuel.isConnected();
// if(connectionState){

// }else{
    
// }
//if there connect btn click check if the user is alrady installed the wallets and show the dialog 

//if the click on installed wallet connnect else go to download it  
$(async function() {
    $('#connectWallet2').on('click', async function () {
        $('#connectWallet')[0].click();
    });
    $('#connectWallet').on('click', async function () {
        
        if(fuel._connectors[0].installed){
            $('.Fuel')[0].style.display="block";
            let clc2=false;
            $('.fuel-connectors-connector-item').on('click', async function (e) {
                if(clc2==true){
                }else{
                    clc2=true;
                    $('.Fuel')[0].style.display="none";
                    $('.fuel-connectors-connector-item [role="status"]')[0].style.display="block";
                        await fuel.selectConnector("Fuel Wallet").then(data => {
                        fuel.connect().then(async connected => {
                            if(connected){
                                $('.fuel-connectors')[0].style.display="none";
                                await fuel.accounts().then(dataacc => {
                                    $('#wallet')[0].innerText=(dataacc[0].slice(0, 6))+'...'+(dataacc[0].slice(-6));
                                    ('#connectWallet').length && $('#connectWallet').css('display', 'none');
                                    ('#connectWallet2').length && $('#connectWallet2').css('display', 'none');
                                    ('#connectWallet2Done').length && $('#connectWallet2Done').css('display', 'block');
                                    ('#wallet').length && $('#wallet').css('display', 'block');
                                });

                            }else{
                                $('.fuel-connectors-connector-item [role="status"]')[0].style.display="none";
                                $('.Fuel')[0].style.display="block";
                                clc2=false;
                            }
                        })
                        .catch(error => {
                            $('.fuel-connectors-connector-item [role="status"]')[0].style.display="none";
                            $('.Fuel')[0].style.display="block";
                            clc2=false;
                           
                        });
                    })
                    .catch(error => {

                     });                   
                }
                
            });
        }else{
            $('.Fuel')[0].style.display="none";
            $('.fuel-connectors-connector-item').on('click', async function () {
                window.open('https://wallet.fuel.network/docs/install/', '_blank');
            });
        }
        if(fuel._connectors[2].installed){
            $('.Fuelet')[0].style.display="block";
            let clc=false;
            $('.fuelet-connectors-connector-item').on('click', async function (e) {
                if(clc==true){
                }else{
                    clc=true;
                    $('.Fuelet')[0].style.display="none";
                    $('.fuelet-connectors-connector-item [role="status"]')[0].style.display="block";
                        await fuel.selectConnector("Fuelet Wallet").then(data => {
                        fuel.connect().then(async connected => {
                            if(connected){
                                $('.fuel-connectors')[0].style.display="none";
                                await fuel.accounts().then(dataacc => {
                                    $('#wallet')[0].innerText=(dataacc[0].slice(0, 6))+'...'+(dataacc[0].slice(-6));
                                    ('#connectWallet').length && $('#connectWallet').css('display', 'none');
                                    ('#connectWallet2').length && $('#connectWallet2').css('display', 'none');
                                    ('#connectWallet2Done').length && $('#connectWallet2Done').css('display', 'block');
                                    ('#wallet').length && $('#wallet').css('display', 'block');
                                });

                            }else{
                                $('.fuelet-connectors-connector-item [role="status"]')[0].style.display="none";
                                $('.Fuelet')[0].style.display="block";
                                clc=false;
                            }
                        })
                        .catch(error => {
                            $('.fuelet-connectors-connector-item [role="status"]')[0].style.display="none";
                            $('.Fuel')[0].style.display="block";
                            clc=false;
                        });
                    })
                    .catch(error => {

                     });                   
                }
                
            });
        }else{
            $('.Fuelet')[0].style.display="none";
            $('.fuelet-connectors-connector-item').on('click', async function () {
                window.open('https://fuelet.app/download/', '_blank');
            });
        }
        $('.fuel-connectors')[0].style.display="block";
    });

    $('.fuel-connectors-close-icon').on('click', async function () {
        $('.fuel-connectors')[0].style.display="none";
    });  

    const hasConnector = await fuel.hasConnector();
    if(hasConnector){
        const connectionState = await fuel.isConnected();
        if(connectionState){
            await fuel.accounts().then(dataacc => {
                $('#wallet')[0].innerText=(dataacc[0].slice(0, 6))+'...'+(dataacc[0].slice(-6));
                ('#connectWallet').length && $('#connectWallet').css('display', 'none');
                ('#connectWallet2').length && $('#connectWallet2').css('display', 'none');
                ('#connectWallet2Done').length && $('#connectWallet2Done').css('display', 'block');
                ('#wallet').length && $('#wallet').css('display', 'block');
            });
        }
    }
});