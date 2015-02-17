<?php

/* TestBundle:Default:calendario.html.twig */
class __TwigTemplate_464adefa983f419f33ff894f4df3feccf0da68d2d775127ae9266aaac88d634d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("TestBundle::index.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'pluginstyle' => array($this, 'block_pluginstyle'),
            'mapasitio' => array($this, 'block_mapasitio'),
            'pagecontent' => array($this, 'block_pagecontent'),
            'plugins' => array($this, 'block_plugins'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TestBundle::index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_titulo($context, array $blocks = array())
    {
        echo "Página de calendario";
    }

    // line 3
    public function block_pluginstyle($context, array $blocks = array())
    {
        // line 4
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/css/fullcalendar.css"), "html", null, true);
        echo "\" />
";
    }

    // line 6
    public function block_mapasitio($context, array $blocks = array())
    {
        // line 7
        echo "                            <div class=\"breadcrumbs\" id=\"breadcrumbs\">
                                    <ul class=\"breadcrumb\">
                                            <li>
                                                    <i class=\"icon-home home-icon\"></i>
                                                    <a href=\"#\">Home</a>

                                                    <span class=\"divider\">
                                                            <i class=\"icon-angle-right arrow-icon\"></i>
                                                    </span>
                                            </li>
                                            <li class=\"active\">Calendar</li>
                                    </ul><!--.breadcrumb-->

                                    <div class=\"nav-search\" id=\"nav-search\">
                                            <form class=\"form-search\" />
                                                    <span class=\"input-icon\">
                                                            <input type=\"text\" placeholder=\"Search ...\" class=\"input-small nav-search-input\" id=\"nav-search-input\" autocomplete=\"off\" />
                                                            <i class=\"icon-search nav-search-icon\"></i>
                                                    </span>
                                            </form>
                                    </div><!--#nav-search-->
                            </div>

";
    }

    // line 32
    public function block_pagecontent($context, array $blocks = array())
    {
        // line 33
        echo "<div class=\"page-content\">
                                    <div class=\"page-header position-relative\">
                                            <h1>
                                                    Full Calendar
                                                    <small>
                                                            <i class=\"icon-double-angle-right\"></i>
                                                            with draggable and editable events
                                                    </small>
                                            </h1>
                                    </div><!--/.page-header-->

                                    <div class=\"row-fluid\">
                                            <div class=\"span12\">
                                                    <!--PAGE CONTENT BEGINS-->

                                                    <div class=\"row-fluid\">
                                                            <div class=\"span9\">
                                                                    <div class=\"space\"></div>

                                                                    <div id=\"calendar\"></div>
                                                            </div>

                                                            <div class=\"span3\">
                                                                    <div class=\"widget-box transparent\">
                                                                            <div class=\"widget-header\">
                                                                                    <h4>Draggable events</h4>
                                                                            </div>

                                                                            <div class=\"widget-main\">
                                                                                    <div id=\"external-events\">
                                                                                            <div class=\"external-event label-grey\" data-class=\"label-grey\">
                                                                                                    <i class=\"icon-move\"></i>
                                                                                                    My Event 1
                                                                                            </div>

                                                                                            <div class=\"external-event label-success\" data-class=\"label-success\">
                                                                                                    <i class=\"icon-move\"></i>
                                                                                                    My Event 2
                                                                                            </div>

                                                                                            <div class=\"external-event label-important\" data-class=\"label-important\">
                                                                                                    <i class=\"icon-move\"></i>
                                                                                                    My Event 3
                                                                                            </div>

                                                                                            <div class=\"external-event label-purple\" data-class=\"label-purple\">
                                                                                                    <i class=\"icon-move\"></i>
                                                                                                    My Event 4
                                                                                            </div>

                                                                                            <div class=\"external-event label-yellow\" data-class=\"label-yellow\">
                                                                                                    <i class=\"icon-move\"></i>
                                                                                                    My Event 5
                                                                                            </div>

                                                                                            <div class=\"external-event label-pink\" data-class=\"label-pink\">
                                                                                                    <i class=\"icon-move\"></i>
                                                                                                    My Event 6
                                                                                            </div>

                                                                                            <div class=\"external-event label-info\" data-class=\"label-info\">
                                                                                                    <i class=\"icon-move\"></i>
                                                                                                    My Event 7
                                                                                            </div>

                                                                                            <label>
                                                                                                    <input type=\"checkbox\" class=\"ace-checkbox\" id=\"drop-remove\" />
                                                                                                    <span class=\"lbl\"> Remove after drop</span>
                                                                                            </label>
                                                                                    </div>
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                    </div>

                                                    <!--PAGE CONTENT ENDS-->
                                            </div><!--/.span-->
                                    </div><!--/.row-fluid-->
                            </div><!--/.page-content-->
";
    }

    // line 113
    public function block_plugins($context, array $blocks = array())
    {
        // line 114
        $this->displayParentBlock("plugins", $context, $blocks);
        echo "
            <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery-ui-1.10.3.custom.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 120
    public function block_script($context, array $blocks = array())
    {
        // line 121
        echo "            <script type=\"text/javascript\">
                                    window.onload = function() {
                        var elemento=document.getElementById(\"mncalendario\");
                        elemento.classList.add('active');
                    }
\t\t\t\$(function() {

/* initialize the external events
\t-----------------------------------------------------------------*/

\t\$('#external-events div.external-event').each(function() {

\t\t// create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
\t\t// it doesn't need to have a start or end
\t\tvar eventObject = {
\t\t\ttitle: \$.trim(\$(this).text()) // use the element's text as the event title
\t\t};

\t\t// store the Event Object in the DOM element so we can get to it later
\t\t\$(this).data('eventObject', eventObject);

\t\t// make the event draggable using jQuery UI
\t\t\$(this).draggable({
\t\t\tzIndex: 999,
\t\t\trevert: true,      // will cause the event to go back to its
\t\t\trevertDuration: 0  //  original position after the drag
\t\t});
\t\t
\t});




\t/* initialize the calendar
\t-----------------------------------------------------------------*/

\tvar date = new Date();
\tvar d = date.getDate();
\tvar m = date.getMonth();
\tvar y = date.getFullYear();

\t
\tvar calendar = \$('#calendar').fullCalendar({
\t\t buttonText: {
\t\t\tprev: '<i class=\"icon-chevron-left\"></i>',
\t\t\tnext: '<i class=\"icon-chevron-right\"></i>'
\t\t},
\t
\t\theader: {
\t\t\tleft: 'prev,next today',
\t\t\tcenter: 'title',
\t\t\tright: 'month,agendaWeek,agendaDay'
\t\t},
\t\tevents: [
\t\t{
\t\t\ttitle: 'All Day Event',
\t\t\tstart: new Date(y, m, 1),
\t\t\tclassName: 'label-important'
\t\t},
\t\t{
\t\t\ttitle: 'Long Event',
\t\t\tstart: new Date(y, m, d-5),
\t\t\tend: new Date(y, m, d-2),
\t\t\tclassName: 'label-success'
\t\t},
\t\t{
\t\t\ttitle: 'Some Event',
\t\t\tstart: new Date(y, m, d-3, 16, 0),
\t\t\tallDay: false
\t\t}]
\t\t,
\t\teditable: true,
\t\tdroppable: true, // this allows things to be dropped onto the calendar !!!
\t\tdrop: function(date, allDay) { // this function is called when something is dropped
\t\t
\t\t\t// retrieve the dropped element's stored Event Object
\t\t\tvar originalEventObject = \$(this).data('eventObject');
\t\t\tvar \$extraEventClass = \$(this).attr('data-class');
\t\t\t
\t\t\t
\t\t\t// we need to copy it, so that multiple events don't have a reference to the same object
\t\t\tvar copiedEventObject = \$.extend({}, originalEventObject);
\t\t\t
\t\t\t// assign it the date that was reported
\t\t\tcopiedEventObject.start = date;
\t\t\tcopiedEventObject.allDay = allDay;
\t\t\tif(\$extraEventClass) copiedEventObject['className'] = [\$extraEventClass];
\t\t\t
\t\t\t// render the event on the calendar
\t\t\t// the last `true` argument determines if the event \"sticks\" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
\t\t\t\$('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
\t\t\t
\t\t\t// is the \"remove after drop\" checkbox checked?
\t\t\tif (\$('#drop-remove').is(':checked')) {
\t\t\t\t// if so, remove the element from the \"Draggable Events\" list
\t\t\t\t\$(this).remove();
\t\t\t}
\t\t\t
\t\t}
\t\t,
\t\tselectable: true,
\t\tselectHelper: true,
\t\tselect: function(start, end, allDay) {
\t\t\t
\t\t\tbootbox.prompt(\"New Event Title:\", function(title) {
\t\t\t\tif (title !== null) {
\t\t\t\t\tcalendar.fullCalendar('renderEvent',
\t\t\t\t\t\t{
\t\t\t\t\t\t\ttitle: title,
\t\t\t\t\t\t\tstart: start,
\t\t\t\t\t\t\tend: end,
\t\t\t\t\t\t\tallDay: allDay
\t\t\t\t\t\t},
\t\t\t\t\t\ttrue // make the event \"stick\"
\t\t\t\t\t);
\t\t\t\t}
\t\t\t});
\t\t\t

\t\t\tcalendar.fullCalendar('unselect');
\t\t\t
\t\t}
\t\t,
\t\teventClick: function(calEvent, jsEvent, view) {

\t\t\tvar form = \$(\"<form class='form-inline'><label>Change event name &nbsp;</label></form>\");
\t\t\tform.append(\"<input autocomplete=off type=text value='\" + calEvent.title + \"' /> \");
\t\t\tform.append(\"<button type='submit' class='btn btn-small btn-success'><i class='icon-ok'></i> Save</button>\");
\t\t\t
\t\t\tvar div = bootbox.dialog(form,
\t\t\t\t[
\t\t\t\t{
\t\t\t\t\t\"label\" : \"<i class='icon-trash'></i> Delete Event\",
\t\t\t\t\t\"class\" : \"btn-small btn-danger\",
\t\t\t\t\t\"callback\": function() {
\t\t\t\t\t\tcalendar.fullCalendar('removeEvents' , function(ev){
\t\t\t\t\t\t\treturn (ev._id == calEvent._id);
\t\t\t\t\t\t})
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t,
\t\t\t\t{
\t\t\t\t\t\"label\" : \"<i class='icon-remove'></i> Close\",
\t\t\t\t\t\"class\" : \"btn-small\"
\t\t\t\t}
\t\t\t\t]
\t\t\t\t,
\t\t\t\t{
\t\t\t\t\t// prompts need a few extra options
\t\t\t\t\t\"onEscape\": function(){div.modal(\"hide\");}
\t\t\t\t}
\t\t\t);
\t\t\t
\t\t\tform.on('submit', function(){
\t\t\t\tcalEvent.title = form.find(\"input[type=text]\").val();
\t\t\t\tcalendar.fullCalendar('updateEvent', calEvent);
\t\t\t\tdiv.modal(\"hide\");
\t\t\t\treturn false;
\t\t\t});
\t\t\t
\t\t
\t\t\t//console.log(calEvent.id);
\t\t\t//console.log(jsEvent);
\t\t\t//console.log(view);

\t\t\t// change the border color just for fun
\t\t\t//\$(this).css('border-color', 'red');

\t\t}
\t\t
\t});


})
\t\t</script>
";
    }

    public function getTemplateName()
    {
        return "TestBundle:Default:calendario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 121,  198 => 120,  192 => 118,  188 => 117,  184 => 116,  180 => 115,  176 => 114,  173 => 113,  90 => 33,  87 => 32,  60 => 7,  57 => 6,  50 => 4,  47 => 3,  41 => 2,  11 => 1,);
    }
}
