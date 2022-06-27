$(function () {
    $('#addWorkingExp').click(function (e) { 
        e.preventDefault();
        $('#workExperience .input-data').append(`
        <input name="wExperience[]" type="text" class="form-control mt-2" placeholder="Your working experience..">
        `);
    });

    $('#addEducation').click(function (e) { 
        e.preventDefault();
        $('#education .input-data').append(`
        <input name="education[]" type="text" class="form-control mt-2" placeholder="Your education..">
        `);
    });

    $('#addSkill').click(function (e) { 
        e.preventDefault();
        $('#skills .input-data').append(`
        <input name="skills[]" type="text" class="form-control mt-2" placeholder="Your skill..">
        `);
    });

    $("#personalStatement").hide();
    $("#workExperience").hide();
    $("#education").hide();
    $("#skills").hide();

    $('#toPersonalStatement').click(function (e) { 
        e.preventDefault();
        $('#contactInfo').hide('slow');
        $('#personalStatement').show('slow');
    });

    $('#backBasicInfo').click(function (e) { 
        e.preventDefault();
        $('#personalStatement').hide('slow');
        $('#contactInfo').show('slow');
    });

    $('#toWorkExperience').click(function (e) { 
        e.preventDefault();
        $('#personalStatement').hide('slow');
        $('#workExperience').show('slow');
    });

    $('#backPersonalStatement').click(function (e) { 
        e.preventDefault();
        $('#workExperience').hide('slow');
        $('#personalStatement').show('slow');
    });

    $('#toEducation').click(function (e) { 
        e.preventDefault();
        $('#workExperience').hide('slow');
        $('#education').show('slow');
    });

    $('#backWorkExperience').click(function (e) { 
        e.preventDefault();
        $('#education').hide('slow');
        $('#workExperience').show('slow');
    });

    $('#toSkills').click(function (e) { 
        e.preventDefault();
        $('#education').hide('slow');
        $('#skills').show('slow');
    });

    $('#backEducation').click(function (e) { 
        e.preventDefault();
        $('#skills').hide('slow');
        $('#education').show('slow');
    });
});
