module.exports = {
    "transpileDependencies": [
        "vuetify"
    ],
    devServer: {
        port: 8081,
        disableHostCheck: true,
        proxy: {
            'api/': {
                target: 'http://localhost:80'
            }
        }
    }
}