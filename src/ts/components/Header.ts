const menuButton = document.getElementById("lpi-header-menu-button")
const closeIcon = document.getElementById("lpi-header-menu-icon-closed")
const openIcon = document.getElementById("lpi-header-menu-icon-opened")

const handleCloseMenu = () => {
    if (closeIcon === null || openIcon === null) { return }

    if (!closeIcon.classList.contains("lpi-header-menu-icon-hidden")) {
        closeIcon.classList.add("lpi-header-menu-icon-hidden")
    }
    if (openIcon.classList.contains("lpi-header-menu-icon-hidden")) {
        openIcon.classList.remove("lpi-header-menu-icon-hidden")
    }
}

const handleOpenMenu = () => {
    if (closeIcon === null || openIcon === null) { return }

    if (closeIcon.classList.contains("lpi-header-menu-icon-hidden")) {
        closeIcon.classList.remove("lpi-header-menu-icon-hidden")
    }
    if (!openIcon.classList.contains("lpi-header-menu-icon-hidden")) {
        openIcon.classList.add("lpi-header-menu-icon-hidden")
    }
}

const handleMenuButtonClick = () => {
    const isMenuOpen = openIcon?.classList.contains("lpi-header-menu-icon-hidden")

    if (isMenuOpen) {
        handleCloseMenu()
    } else {
        handleOpenMenu()
    }
}

menuButton?.addEventListener("click", () => {
    handleMenuButtonClick()
})
