
plugin.tx_fxspeaker_fxspeakermng {
    view {
        # cat=plugin.tx_fxspeaker_fxspeakermng/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:fxspeaker/Resources/Private/Templates/
        # cat=plugin.tx_fxspeaker_fxspeakermng/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:fxspeaker/Resources/Private/Partials/
        # cat=plugin.tx_fxspeaker_fxspeakermng/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:fxspeaker/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_fxspeaker_fxspeakermng//a; type=string; label=Default storage PID
        storagePid =
    }
}
