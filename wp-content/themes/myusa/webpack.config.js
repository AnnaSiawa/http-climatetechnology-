const path = require('path');
const webpack = require('webpack');
const miniCssExtractPlugin = require('mini-css-extract-plugin');
const TerserPlugin = require('terser-webpack-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const {CleanWebpackPlugin} = require('clean-webpack-plugin');
const {minify} = require('terser-webpack-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");

// default config if no config defined
// set local env in webpack.brs.config.js
let wbrs = {
    proxy: 'http://localhost:80', /* local host:port */
    port: 3000 /* bs port */
};

try {
    wbrs = require('./webpack.brs.config');
} catch (ex) {

}

module.exports = {
    mode: 'development',
    devtool: 'source-map',

    entry: {
        main: path.resolve(__dirname, './src/index.js'),
    },

    output: {
        path: path.resolve(__dirname, 'dist'),
        filename: 'index.js'
    },

    module: {
        rules: [
            {
                test: /\.((c|sa|sc)ss)$/i,
                use: [miniCssExtractPlugin.loader, 'css-loader', 'postcss-loader', {
                    loader: 'sass-loader',
                    options: {
                        sourceMap: true,
                    }
                }],
            },
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: [{
                    loader: 'babel-loader',
                    options: {
                        "presets": [
                            [
                                "@babel/preset-env",
                            ]
                        ],
                        "comments": false
                    },
                }],
            },
            {
                test: /\.(png|gif|jpe?g|svg)$/i,
                type: 'asset',
                parser: {
                    dataUrlCondition: {
                        maxSize: 64,
                    },
                },
                generator: {
                    filename: 'images/[name][ext]',
                },
            },
            {
                test: /\.(eot|ttf|woff|woff2)$/,
                type: 'asset',
                parser: {
                    dataUrlCondition: {
                        maxSize: 64,
                    },
                },
                // generator: {
                //     filename: 'fonts/[name][ext]',
                // },
            },
        ]
    },

    plugins: [
        new webpack.ProgressPlugin(),
        new CleanWebpackPlugin(),
        new miniCssExtractPlugin({
            filename: 'index.css',
        }),
        new CopyWebpackPlugin({
            patterns: [
                {from: 'src/img', to: 'images', force: true},
                // {from: 'src/fonts', to: 'fonts', force: true}
            ],
        }),
        new BrowserSyncPlugin({
            proxy: wbrs.proxy,
            port: wbrs.port,
            files: [
                path.resolve(__dirname, 'dist') + '/*.css',
                path.resolve(__dirname, 'dist') + '/*.js',
                path.resolve(__dirname) + '/*.php'
            ],
            injectCss: true,
            notify: false,
        }, {
            reload: false,
        }),
    ],

    optimization: {
        minimizer: [
            new TerserPlugin({minify, parallel: true, extractComments: false}),
            new CssMinimizerPlugin({
                minimizerOptions: {
                    preset: [
                        "default",
                        {
                            discardComments: {removeAll: true},
                        },
                    ],
                },
            }),
        ],
        minimize: true,
    },
}
