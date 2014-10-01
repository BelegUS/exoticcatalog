            $("#myCart").buildMbExtruder({
                position:"right",
                width:600,
                extruderOpacity:.8,

                hidePanelsOnClose:false,
                accordionPanels:false,
                onExtOpen:function(){},
                onExtContentLoad:function(){$("#myCart").openPanel();},
                onExtClose:function(){}
            });