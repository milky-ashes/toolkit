<extends:form.input wrapper-class="item-autocomplete ${wrapper-class}"/>

<block:assets>
    <block:assets/>
    <asset:script href="resources/scripts/spiral/sf.min.js"/>
    <asset:script href="resources/scripts/spiral/Autocomplete.min.js"/>
</block:assets>

<block:input-body>
    <div class="item-group">
        <input type="${type|text}" value="${value}${context}"
               data-key="${key}" data-name="${name}" data-url="${url}"
               class="js-sf-autocomplete ${class}" node:attributes/>
    </div>
</block:input-body>