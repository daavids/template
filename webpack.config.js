var path = require('path');

var ExtractTextPlugin = require('extract-text-webpack-plugin');

var extractSass = new ExtractTextPlugin({
    filename: './css/app.css',
    allChunks: true
});

module.exports = {
    entry: ['./src/js/app.js', './src/sass/app.scss'],
    output: {
        path: __dirname+'/public_html/dist',
        filename: 'js/app.js'
    },
    module: {
        loaders: [
            {
                test: /\.js$/, 
                loader: 'babel-loader',
                exclude: /node_modules/,
                query: { presets: ['env'] }
            },
            {
                test: /\.css$/,
                use: ['style-loader', 'css-loader']
            },
            {
                test: /\.scss$/,
                use: extractSass.extract({
                    use: [{ loader: 'css-loader' }, { loader: 'sass-loader' }],
                    fallback: 'style-loader'
                })
            }
        ]
    },
    plugins: [
        extractSass
    ]
};