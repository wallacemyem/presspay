function PaystackFee() {
    this.DEFAULT_PERCENTAGE = 0.015;
    this.DEFAULT_ADDITIONAL_CHARGE = 10000;
    this.DEFAULT_THRESHOLD = 250000;
    this.DEFAULT_CAP = 200000;

    this.percentage = this.DEFAULT_PERCENTAGE;
    this.additional_charge = this.DEFAULT_ADDITIONAL_CHARGE;
    this.threshold = this.DEFAULT_THRESHOLD;
    this.cap = this.DEFAULT_CAP;

    this.chargeDivider = 0;
    this.crossover = 0;
    this.flatlinePlusCharge = 0;
    this.flatline = 0;

    this.withPercentage = function (percentage) {
        this.percentage = percentage;
        this.__setup();
    };

    this.withAdditionalCharge = function (additional_charge) {
        this.additional_charge = additional_charge;
        this.__setup();
    };

    this.withThreshold = function (threshold) {
        this.threshold = threshold;
        this.__setup();
    };

    this.withCap = function (cap) {
        this.cap = cap;
        this.__setup();
    };

    this.__setup = function () {
        this.chargeDivider = this.__chargeDivider();
        this.crossover = this.__crossover();
        this.flatlinePlusCharge = this.__flatlinePlusCharge();
        this.flatline = this.__flatline();
    };

    this.__chargeDivider = function () {
        return 1 - this.percentage;
    };

    this.__crossover = function () {
        return (this.threshold * this.chargeDivider) - this.additional_charge;
    };

    this.__flatlinePlusCharge = function () {
        return (this.cap - this.additional_charge) / this.percentage;
    };

    this.__flatline = function () {
        return this.flatlinePlusCharge - this.cap;
    };

    this.addFor = function (amountinkobo) {
        if (amountinkobo > this.flatline)
            return parseInt(Math.round(amountinkobo + this.cap));
        else if (amountinkobo > this.crossover)
            return parseInt(Math.round((amountinkobo + this.additional_charge) / this.chargeDivider));
        else
            return parseInt(Math.round(amountinkobo / this.chargeDivider));
    };


    this.__setup = function () {
        this.chargeDivider = this.__chargeDivider();
        this.crossover = this.__crossover();
        this.flatlinePlusCharge = this.__flatlinePlusCharge();
        this.flatline = this.__flatline();
    };

    this.__setup();
}

