$(document).ready(function () {
    $(".content__icon-income").on("click", function () {
        $(".content__icon-income").removeClass("actived");
        $(this).addClass("actived");

        $(".content__iocon-outcome").removeClass("actived");
    });

    $("#UAH").on("click", function () {
        $("#BTC1").addClass("active");
        $("#ETH1").addClass("active");
        $("#Waves1").addClass("active");

        $("#BTC1").addClass("actived");

        $("#UAH1").removeClass("active");
        // $("#BTC1").removeClass("active");
        $("#TRC1").removeClass("active");
        $("#RUB1").removeClass("active");
        $("#VisaRUB").removeClass("active");
        $("#ZEC1").removeClass("active");
        $("#qiwi").removeClass("activee");

        $("#adres").addClass("activee");

        $("#buy").text("Купить BTC");
        $("#outcome").text("BTC");
        $("#income").text("UAH");

        // $(".header__down").text(
        //     "Покупка Bitcoin (BTC) через Visa/Mastercard (UAH)"
        // );

        // UAH1
        // BTC1
        // TRC1
        // RUB1
        // VisaRUB
        // ZEC1
    });

    $("#BTC").on("click", function () {
        // $("#BTC1").addClass("active");
        $("#UAH1").addClass("active");
        $("#ETH1").addClass("active");
        $("#Waves1").addClass("active");
        $("#RUB1").addClass("active");
        $("#VisaRUB").addClass("active");
        // $("#adres").addClass("active");

        $("#card").addClass("activee");
        $("#UAH1").addClass("actived");

        $("#income").text("BTC");

        // $("#UAH1").addClass("actived");
        $("#adres").removeClass("activee");

        $("#Waves1").removeClass("active");

        // $("#UAH1").removeClass("active");
        $("#BTC1").removeClass("active");
        // $("#TRC1").removeClass("active");
        // $("#RUB1").removeClass("active");
        // $("#VisaRUB").removeClass("active");
        // $("#ZEC1").removeClass("active");
    });

    $("#ETH").on("click", function () {
        // $("#BTC1").addClass("active");
        $("#UAH1").addClass("active");
        $("#BTC1").addClass("active");
        $("#VisaRUB").addClass("active");
        $("#RUB1").addClass("active");
        $("#UAH1").addClass("actived");

        $("#Waves1").removeClass("active");
        $("#BTC1").removeClass("actived");
        $("#adres").removeClass("activee");

        $("#TRC1").removeClass("active");
        $("#ZEC1").removeClass("active");
        $("#qiwi").removeClass("activee");

        $("#income").text("ETH");

        $("#ETH1").removeClass("active");
        // $("#Waves1").addClass("active");
    });
    $("#TRC").on("click", function () {
        // $("#BTC1").addClass("active");
        $("#UAH1").addClass("active");
        $("#BTC1").addClass("active");
        $("#VisaRUB").addClass("active");
        $("#RUB1").addClass("active");
        $("#ETH1").addClass("active");
        $("#UAH1").addClass("actived");
        $("#Waves1").removeClass("active");
        $("#BTC1").removeClass("actived");
        $("#adres").removeClass("activee");
        $("#qiwi").removeClass("activee");

        $("#TRC1").removeClass("active");

        $("#income").text("TRC20");

        $("#ZEC1").removeClass("active");

        $("#buy").text("Купить UAH");
        $("#outcome").text("UAH");
    });

    $("#RUB").on("click", function () {
        $("#ETH1").addClass("active");
        $("#BTC1").addClass("active");
        $("#BTC1").addClass("actived");

        $("#UAH1").removeClass("active");
        $("#Waves1").removeClass("active");
        $("#VisaRUB").removeClass("active");
        $("#adres").removeClass("activee");

        $("#RUB1").removeClass("active");
        $("#income").text("RUB");

        $("#qiwi").addClass("activee");
        $("#card").removeClass("activee");
    });
    $("#Waves").on("click", function () {
        $("#UAH1").addClass("active");
        $("#UAH1").addClass("actived");
        $("#card").addClass("activee");

        $("#ETH1").removeClass("active");
        $("#BTC1").removeClass("active");
        $("#VisaRUB").removeClass("active");
        $("#RUB1").removeClass("active");
        $("#Waves1").removeClass("active");
        $("#adres").removeClass("activee");
        $("#qiwi").removeClass("activee");
        $("#income").text("Waves");

        $("#buy").text("Купить UAH");
        $("#outcome").text("UAH");
    });
    $("#Waves1").on("click", function () {
        $("#buy").text("Купить Waves");
        $("#outcome").text("Waves");
        // $("#income").text("Waves");
    });

    $("#ZEC").on("click", function () {
        $("#card").addClass("activee");
        $("#adres").removeClass("activee");
        $("#qiwi").removeClass("activee");

        $("#UAH1").addClass("active");
        $("#UAH1").addClass("actived");
        $("#ETH1").removeClass("active");
        $("#BTC1").removeClass("active");
        $("#VisaRUB").removeClass("active");
        $("#RUB1").removeClass("active");
        $("#Waves1").removeClass("active");

        $("#income").text("ZEC");

        $("#buy").text("Купить UAH");
        $("#outcome").text("UAH");
    });

    $("#RUB").on("click", function () {
        $("#qiwi").removeClass("activee");
        $("#qiwi").addClass("activee");
        // $("#card").addClass("active");
        $("#adres").addClass("activee");

        $("#buy").text("Купить BTC");
        $("#outcome").text("BTC");
    });

    $("#UAH1").on("click", function () {
        $("#buy").text("Купить UAH");
        $("#outcome").text("UAH");
        let www = this;
        var outcome = $(this).attr("value");
    });

    $("#RUB1").on("click", function () {
        $("#qiwi").addClass("activee");
        $("#card").removeClass("activee");
        $("#adres").removeClass("activee");

        $("#buy").text("Купить RUB");
        $("#outcome").text("RUB");
        let www = this;
        var outcome = $(this).attr("value");
    });
    // $("#UAH1").on("click", function () {
    //     $("#qiwi").removeClass("active");
    //     $("#adres").addClass("active");
    //     $("#card").removeClass("active");
    // });
    $("#BTC1").on("click", function () {
        $("#buy").text("Купить BTC");
        $("#outcome").text("BTC");
        $("#adres").addClass("activee");
        // $("#qiwi").removeClass("active");
        $("#card").removeClass("activee");

        let www = this;
        var outcome = $(this).attr("value");

        // $("#qiwi").removeClass("active");
        // $("#adres").removeClass("active");
        // $("#card").removeClass("active");
    });

    $("#VisaRUB").on("click", function () {
        $("#card").addClass("activee");
        $("#qiwi").removeClass("activee");

        let www = this;
        var outcome = $(this).attr("value");
    });
    $("#ETH1").on("click", function () {
        $("#buy").text("Купить ETH");
        $("#outcome").text("ETH");
        $("#card").removeClass("activee");
        if ($("#RUB").hasClass("actived")) {
            $("#qiwi").addClass("activee");
        } else {
            $("#qiwi").removeClass("activee");
        }

        let www = this;
        var outcome = $(this).attr("value");

        $("#adres").addClass("activee");
        $("#adres__title-title ").text("Адрес ETH кошелька.");
    });

    $(".content__iocon-outcome").on("click", function () {
        $(".content__iocon-outcome").removeClass("actived");
        $(this).addClass("actived");
    });

    // ИЗМЕНЕНИИЕ 2 ИНПУТА
    $(".content__iocon-outcome").on("click", function () {
        let www = this;
        var outcome = $(this).attr("value");
        // console.log(outcome);
        if ($(".content__iocon-outcome").hasClass("actived")) {
            $("#income__sum").keyup(function () {
                // let price = this;
                let sum = $(this).attr("value");
                sum = this.value;
                $(".content__icon-income").attr("value", sum);

                if ($("#BTC").hasClass("actived")) {
                    var price = sum * outcome;
                    $("#outcome__sum").attr("placeholder", price);
                    $("#outcome__sum").attr("value", price);

                    // $("#outcome__sum").attr("name", price);

                    // $("#outcome__sum").attr("name" = price);
                    // console.log($("#outcome__sum").attr("name"))
                } else {
                    var price = sum / outcome;
                    $("#outcome__sum").attr("placeholder", price);
                    $("#outcome__sum").attr("value", price);
                }

                // $("#outcome__sum").attr("placeholder");

                // $("#UAH").attr("value", $this());
                // $("#outcome__sum").text($("#income__sum").value);
                // content__icon-income
                // console.log(owo);
                // income__sum;
                // $("#income__sum").text('sfsd').val());
            });
        }
    });

    // ЗАПРОСЫ  ПРАЙСОВ НА ВАЛЮТЫ
    // BTC_UAH
    $.ajax({
        url: "https://api.exmo.com/v1.1/order_book",
        type: "post",
        data: { pair: "BTC_UAH" },
        dataType: "json",
        success: function (data) {
            data.toString();
            // console.log(data);
            Object.values(data.BTC_UAH).forEach((value, index) => {
                if (index == 1) {
                    value == this;
                    priceBTCu = Math.round(value);
                    // console.log(price);
                    console.log(priceBTCu);
                    if ($("#UAH").hasClass("actived")) {
                        $("#BTC1").attr("value", priceBTCu);
                    }
                    $("#BTC").on("click", function () {
                        $("#UAH1").attr("value", priceBTCu);
                    });

                    return priceBTCu;
                }

                // return priceBTCu;
            });

            // priceBTCu
            // return;
            // $("#UAH").on("click", function () {
            //     $("#BTC1").attr("value", price);
            // });
        },
    });
    // ETH_UAH;
    $.ajax({
        url: "https://api.exmo.com/v1.1/order_book",
        type: "post",
        data: { pair: "ETH_UAH" },
        dataType: "json",
        success: function (data) {
            data.toString();
            // console.log(data);

            Object.values(data.ETH_UAH).forEach((value, index) => {
                if (index == 1) {
                    value == this;
                    priceETHu = Math.round(value);
                    // console.log($("#UAH").hasClass("actived"));
                    if ($("#UAH").hasClass("actived")) {
                        $("#ETH1").attr("value", priceETHu);
                    }

                    // if ($("#UAH").hasClass("actived")) {
                    //     $("#ETH1").on("click", function () {
                    //         $("#ETH1").attr("value", priceETHu);
                    //     });
                    // }
                    console.log(priceETHu);
                    // if()
                    // $("#UAH1").attr("value", priceETHu);
                    // $("#ETH").attr("value", priceETHu);

                    // console.log(price);
                }
                return value;
            });
        },
    });
    // WAVES_UAH
    $.ajax({
        url: "https://api.exmo.com/v1.1/order_book",
        type: "post",
        data: { pair: "WAVES_RUB" },
        dataType: "json",
        success: function (data) {
            data.toString();
            // console.log(data);

            Object.values(data.WAVES_RUB).forEach((value, index) => {
                if (index == 1) {
                    value == this;
                    priceWAVESu = Math.round(value);
                    if ($("#UAH").hasClass("actived")) {
                        $("#Waves1").on("click", function () {
                            $("#Waves1").attr("value", priceWAVESu);
                        });
                    }

                    $("#Waves").on("click", function () {
                        $("#UAH1").attr("value", priceWAVESu);
                    });
                    $("#ETH").attr("value", priceWAVESu);

                    // console.log(price);
                }
                return value;
            });
        },
    });

    //BTC
    $.ajax({
        url: "https://api.exmo.com/v1.1/order_book",
        type: "post",
        data: { pair: "BTC_UAH" },
        dataType: "json",
        success: function (data) {
            data.toString();
            // console.log(data);

            Object.values(data.BTC_UAH).forEach((value, index) => {
                if (index == 1) {
                    value == this;
                    priceBTCuah = Math.round(value);
                    if ($("#BTC").hasClass("actived")) {
                        $("#UAH1").on("click", function () {
                            $("#UAH1").attr("value", priceBTCuah);
                        });

                        $("#RUB1").on("click", function () {
                            $("#RUB1").attr("value", priceBTCr);
                            $("#VisaRUB").attr("value", priceBTCr);
                        });

                        console.log("xui");
                    }
                }
                return value;
            });
        },
    });

    $.ajax({
        url: "https://api.exmo.com/v1.1/order_book",
        type: "post",
        data: { pair: "BTC_RUB" },
        dataType: "json",
        success: function (data) {
            data.toString();
            // console.log(data);
            Object.values(data.BTC_RUB).forEach((value, index) => {
                if (index == 1) {
                    value == this;
                    priceBTCr = Math.round(value);
                    $("#RUB1").on("click", function () {
                        $("#RUB1").attr("value", priceBTCr);
                    });
                    $("#RUB").on("click", function () {
                        $("#BTC1").attr("value", priceBTCr);
                    });
                    $("#BTC").on("click", function () {
                        $("#RUB1").attr("value", priceBTCr);
                        $("#VisaRUB").attr("value", priceBTCr);
                    });

                    // $(".RUB").on("click", function () {
                    //     $("#BTC1").on("click", function () {
                    //     });
                    // });

                    return priceBTCr;
                }

                // return priceBTCu;
            });
            if ($("#BTC").hasClass("actived")) {
                console.log("dsdfsfsa");
            }
            // priceBTCu
            // return;
            // $("#UAH").on("click", function () {
            //     $("#BTC1").attr("value", price);
            // });
        },
    });
    ///ETH
    // BTC
    $.ajax({
        url: "https://api.exmo.com/v1.1/order_book",
        type: "post",
        data: { pair: "ETH_BTC" },
        dataType: "json",
        success: function (data) {
            data.toString();
            // console.log(data);
            Object.values(data.ETH_BTC).forEach((value, index) => {
                if (index == 1) {
                    value == this;
                    priceETHb = Math.round(value);

                    if ($("#ETH").hasClass("actived")) {
                        $("#BTC1").attr("value", priceETHb);
                    }
                    // if ($("#BTC").hasClass("actived")) {
                    $("#BTC").on("click", function () {
                        $("#ETH1").attr("value", priceETHb);
                    });
                    // }

                    $("#ETH1").attr("value", priceETHb);

                    // $("#BTC1").attr("value", priceETHb);
                    $("#ETH").on("click", function () {
                        $("#BTC1").attr("value", priceETHb);
                    });
                }
            });
        },
    });
    // UAH
    $.ajax({
        url: "https://api.exmo.com/v1.1/order_book",
        type: "post",
        data: { pair: "ETH_UAH" },
        dataType: "json",
        success: function (data) {
            data.toString();
            // console.log(data);
            Object.values(data.ETH_UAH).forEach((value, index) => {
                if (index == 1) {
                    value == this;
                    priceETHu = Math.round(value);
                    $("#UAH").on("click", function () {
                        $("#ETH1").attr("value", priceETHu);
                    });
                    $("#ETH").on("click", function () {
                        $("#UAH1").attr("value", priceETHu);
                    });
                    // $("#BTC1").attr("value", priceETHb);
                    // $("#ETH").on("click", function () {
                    //     $("#BTC1").attr("value", priceETHu);
                    // });
                }
            });
        },
    });
    //ETH RUB
    $.ajax({
        url: "https://api.exmo.com/v1.1/order_book",
        type: "post",
        data: { pair: "ETH_RUB" },
        dataType: "json",
        success: function (data) {
            data.toString();
            // console.log(data);
            Object.values(data.ETH_RUB).forEach((value, index) => {
                if (index == 1) {
                    value == this;
                    priceETHr = Math.round(value);
                    $("#ETH").on("click", function () {
                        $("#RUB1").on("click", function () {
                            $("#VisaRUB").attr("value", priceETHr);
                            $("#RUB1").attr("value", priceETHr);
                        });
                    });
                    $("#RUB").on("click", function () {
                        $("#ETH1").attr("value", priceETHr);
                    });
                    // $("#BTC1").attr("value", priceETHb);
                    // $("#ETH").on("click", function () {
                    //     $("#BTC1").attr("value", priceETHr);
                    // });
                }
            });
        },
    });

    $.ajax({
        url: "https://api.exmo.com/v1.1/order_book",
        type: "post",
        data: { pair: "ZEC_RUB" },
        dataType: "json",
        success: function (data) {
            data.toString();
            // console.log(data);
            Object.values(data.ZEC_RUB).forEach((value, index) => {
                if (index == 1) {
                    value == this;
                    priceZECu = Math.round(value);
                    $("#ZEC").on("click", function () {
                        $("#UAH1").attr("value", priceZECu);
                    });
                    // console.log($("#ETH"));

                    // $("#ETH").on("click", function () {
                    //     $("#RUB1").on("click", function () {
                    //         $("#VisaRUB").attr("value", priceETHr);
                    //         $("#RUB1").attr("value", priceETHr);
                    //     });
                    // });
                    // $("#BTC1").attr("value", priceETHb);
                    // $("#ETH").on("click", function () {
                    //     $("#BTC1").attr("value", priceETHr);
                    // });
                }
            });
        },
    });

    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    // $(".content__icon-income").on("click", function () {
    //     let income_route = $(this).attr("name");
    //     console.log(income_route);
    // });

    // $(".content__iocon-outcome").on("click", function () {});

    // console.log(out());
    // if ($(".content__iocon-outcome").hasClass("actived")) {
    //     function out() {
    //         let outcome_route = $(this).attr("name");
    //         console.log($(this).attr("name"));
    //         console.log(out(outcome_route));
    //     }

    // $(".content__icon-income").on("click", function () {
    //     var income_route = $(this).attr("name");
    //     console.log(income_route);
    //     return income_route;
    // });
    if (
        $(".content__icon-income").hasClass("actived") &&
        $(".content__iocon-outcome").hasClass("actived")
    ) {
        $(".content__icon-income").on("click", function () {
            const income_route = $(this).attr("name");
            console.log(income_route);
            window.income_route = income_route;

            return income_route;
        });
        $(".content__iocon-outcome").on("click", function () {
            const outcome_route = $(this).attr("name");
            console.log(outcome_route);
            window.outcome_route = outcome_route;

            return outcome_route;
        });

        $("#buy").on("click", function () {
            // return;
            console.log("sfs");
            var values = { income_route, outcome_route };
            console.log(values);
            //устанавливаем событие отправки для формы с id=form
            var form_data = {};
            form_data = $("#form").serializeArray(); //собераем все данные из формы

            form_data[6] = { values };

            // form_data = {
            //     values,
            // };

            // form_data =

            // form_data = [$(".content__iocon-outcome").attr("name")];
            // form_data{ name: income_route, name: outcome_route };

            console.log(form_data);
            // console.log(income_route, outcome_route);
            $.ajax({
                type: "post", //Метод отправки
                dataType: "json",
                url: "api/v1/order",
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                    "Access-Control-Allow-Origin": "*",
                    // attr("content")
                },
                data: {
                    form_data,
                    token: " csrf_token() ",
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                success: function (data) {
                    //код в этом блоке выполняется при успешной отправке сообщения
                    console.log("uiqeweip");
                    console.log(data);
                },
                error: console.log(":("),
                // });
            });
            console.log("hifgdsks");
        });
    }

    // #Если данные с формы form_name меняем на имя формы <form name="имя формы"
    // JSON.stringify(serialize(document.forms.form_name))

    // #Если данные просто массив или обьект
    // JSON.stringify(указываем переменную)

    ///ЗАПРОС С ИХ СУМАМИ
    // $.ajax({
    //     url: "rates" /* Куда пойдет запрос */,
    //     method: "get" /* Метод передачи (post или get) */,
    //     dataType: "html" /* Тип данных в ответе (xml, json, script, html). */,
    //     data: {} /* Параметры передаваемые в запросе. */,
    //     success: function (data) {
    //         /* функция которая будет выполнена после успешного запроса.  */
    //         // alert(data); /* В переменной data содержится ответ от index.php. */
    //         console.log(data);
    //     },
    // });

    ///ЗАПРОС СТАТУСА ЗАЯВКИ
    // $.ajax({
    //     url: "rates" /* Куда пойдет запрос */,
    //     method: "get" /* Метод передачи (post или get) */,
    //     dataType: "html" /* Тип данных в ответе (xml, json, script, html). */,
    //     data: {} /* Параметры передаваемые в запросе. */,
    //     success: function (data) {
    //         /* функция которая будет выполнена после успешного запроса.  */
    //         // alert(data); /* В переменной data содержится ответ от index.php. */
    //         console.log(data);
    //     },
    // });

    // var req = form;
    // console.log(req);

    // if ($("form").length > "1") {
    //     window.location.reload();
    // } else {
    //     // var Error = new Error();
    //     console.log("Ошибка, поле пустое");
    // }
    // var req = $("form").serialize();
    // $("#buy").on("click", function () {
    //     window.location.href("/");
    // });

    console.log("dkf");
});
