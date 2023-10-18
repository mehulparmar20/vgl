document.addEventListener("DOMContentLoaded", function () {
    var countrySelect = document.getElementById("countrySelect");
    var stateSelect = document.getElementById("stateSelect");
    var districtSelect = document.getElementById("districtSelect");

    // Populate the Country dropdown
    data.countries.forEach(function (country) {
        var option = document.createElement("option");
        option.text = country.name;
        countrySelect.add(option);
    });

    // Populate the State dropdown based on the selected country
    countrySelect.addEventListener("change", function () {
        stateSelect.innerHTML = "";
        districtSelect.innerHTML = "";

        var selectedCountry = data.countries.find(function (country) {
            return country.name === countrySelect.value;
        });

        if (selectedCountry) {
            selectedCountry.states.forEach(function (state) {
                var option = document.createElement("option");
                option.text = state.name;
                stateSelect.add(option);
            });
        }
    });

    // Populate the District dropdown based on the selected state
    stateSelect.addEventListener("change", function () {
        districtSelect.innerHTML = "";

        var selectedCountry = data.countries.find(function (country) {
            return country.name === countrySelect.value;
        });

        if (selectedCountry) {
            var selectedState = selectedCountry.states.find(function (state) {
                return state.name === stateSelect.value;
            });

            if (selectedState) {
                selectedState.districts.forEach(function (district) {
                    var option = document.createElement("option");
                    option.text = district;
                    districtSelect.add(option);
                });
            }
        }
    });
});
