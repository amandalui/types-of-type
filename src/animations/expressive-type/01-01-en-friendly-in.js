export default {
  v: '4.10.1',
  fr: 30,
  ip: 0,
  op: 61,
  w: 600,
  h: 125,
  nm: '01-03-en-friendly-in',
  ddd: 0,
  assets: [],
  fonts: {
    list: [
      {
        fName: 'SofiaProSoftBold',
        fFamily: 'Sofia Pro Soft',
        fStyle: 'Bold',
        ascent: 73.1033325195312,
      },
    ],
  },
  layers: [
    {
      ddd: 0,
      ind: 1,
      ty: 5,
      nm: 'Friendly',
      sr: 1,
      ks: {
        o: { a: 0, k: 100, ix: 11 },
        r: { a: 0, k: 0, ix: 10 },
        p: { a: 0, k: [306, 69.5, 0], ix: 2 },
        a: { a: 0, k: [0, 0, 0], ix: 1 },
        s: { a: 0, k: [100, 100, 100], ix: 6 },
      },
      ao: 0,
      ef: [
        {
          ty: 5,
          nm: 'Animation',
          np: 3,
          mn: 'ADBE Slider Control',
          ix: 1,
          en: 1,
          ef: [
            {
              ty: 0,
              nm: 'Slider',
              mn: 'ADBE Slider Control-0001',
              ix: 1,
              v: {
                a: 1,
                k: [
                  {
                    i: { x: [0.273], y: [1] },
                    o: { x: [0.167], y: [0.167] },
                    n: ['0p273_1_0p167_0p167'],
                    t: 0,
                    s: [100],
                    e: [-5],
                  },
                  {
                    i: { x: [0.55], y: [0.952] },
                    o: { x: [0.406], y: [0.015] },
                    n: ['0p55_0p952_0p406_0p015'],
                    t: 15.015,
                    s: [-5],
                    e: [2],
                  },
                  {
                    i: { x: [0.401], y: [1] },
                    o: { x: [0.416], y: [-0.133] },
                    n: ['0p401_1_0p416_-0p133'],
                    t: 25.025,
                    s: [2],
                    e: [0],
                  },
                  {
                    i: { x: [0.401], y: [1] },
                    o: { x: [0.167], y: [0.167] },
                    n: ['0p401_1_0p167_0p167'],
                    t: 37.037,
                    s: [0],
                    e: [0],
                  },
                  {
                    i: { x: [0.586], y: [1.08] },
                    o: { x: [0.599], y: [0] },
                    n: ['0p586_1p08_0p599_0'],
                    t: 84.084,
                    s: [0],
                    e: [5.598],
                  },
                  {
                    i: { x: [0.498], y: [1.008] },
                    o: { x: [0.411], y: [0.06] },
                    n: ['0p498_1p008_0p411_0p06'],
                    t: 95.095,
                    s: [5.598],
                    e: [-5],
                  },
                  {
                    i: { x: [0.833], y: [0.833] },
                    o: { x: [1], y: [0.003] },
                    n: ['0p833_0p833_1_0p003'],
                    t: 107.107,
                    s: [-5],
                    e: [100],
                  },
                  { t: 130.1298828125 },
                ],
                ix: 1,
              },
            },
          ],
        },
      ],
      t: {
        d: {
          k: [
            {
              s: {
                sz: [600, 94],
                ps: [-300, -47],
                s: 100,
                f: 'SofiaProSoftBold',
                t: 'Friendly',
                j: 2,
                tr: 0,
                lh: 120,
                ls: 0,
                fc: [0.04, 0.38, 0.14],
              },
              t: 0,
            },
          ],
        },
        p: {},
        m: { g: 1, a: { a: 0, k: [0, 0], ix: 2 } },
        a: [
          {
            s: {
              t: 1,
              b: 1,
              x:
                "var $bm_rt;\nvar delay, d;\ndelay = 2;\nd = mul(mul(delay, thisComp.frameDuration), sub(textIndex, 1));\n$bm_rt = effect('Animation')('Slider').valueAtTime(sub(time, d));",
            },
            a: {
              p: {
                a: 1,
                k: [
                  {
                    i: { x: 0.833, y: 0.833 },
                    o: { x: 0.167, y: 0.167 },
                    n: '0p833_0p833_0p167_0p167',
                    t: 15,
                    s: [0, 212, 0],
                    e: [0, 317.384, 0],
                    to: [0, 0, 0],
                    ti: [0, 0, 0],
                  },
                  {
                    i: { x: 0.833, y: 0.833 },
                    o: { x: 0.167, y: 0.167 },
                    n: '0p833_0p833_0p167_0p167',
                    t: 37,
                    s: [0, 317.384, 0],
                    e: [0, 1200, 0],
                    to: [0, 0, 0],
                    ti: [0, 0, 0],
                  },
                  {
                    i: { x: 0.833, y: 0.833 },
                    o: { x: 0.167, y: 0.167 },
                    n: '0p833_0p833_0p167_0p167',
                    t: 60.061,
                    s: [0, 1200, 0],
                    e: [0, -1200, 0],
                    to: [0, 0, 0],
                    ti: [0, 0, 0],
                  },
                  {
                    i: { x: 0.833, y: 0.833 },
                    o: { x: 0.167, y: 0.167 },
                    n: '0p833_0p833_0p167_0p167',
                    t: 61.062,
                    s: [0, -1200, 0],
                    e: [0, -235, 0],
                    to: [0, 0, 0],
                    ti: [0, 0, 0],
                  },
                  { t: 95 },
                ],
                ix: 2,
              },
              r: { a: 0, k: 0, ix: 8 },
            },
          },
        ],
      },
      ip: 0,
      op: 150,
      st: 0,
      bm: 0,
    },
  ],
  chars: [
    {
      ch: 'F',
      size: 100,
      style: 'Bold',
      w: 53.7,
      data: {
        shapes: [
          {
            ty: 'gr',
            it: [
              {
                ind: 0,
                ty: 'sh',
                ix: 1,
                ks: {
                  a: 0,
                  k: {
                    i: [
                      [0, 0],
                      [0.101, -3.424],
                      [0, 0],
                      [-3.827, 0],
                      [0, 3.726],
                      [0, 0],
                      [0, 0],
                      [0, 3.323],
                      [3.323, 0],
                      [0, 0],
                      [0, 0],
                      [0, 0],
                      [0, 3.323],
                      [3.323, 0],
                    ],
                    o: [
                      [-3.726, 0],
                      [0, 0],
                      [0, 3.625],
                      [4.028, 0],
                      [0, 0],
                      [0, 0],
                      [3.223, 0],
                      [0, -3.525],
                      [0, 0],
                      [0, 0],
                      [0, 0],
                      [3.223, -0.101],
                      [0, -3.625],
                      [0, 0],
                    ],
                    v: [
                      [13.696, -69.388],
                      [7.855, -63.144],
                      [7.855, -6.345],
                      [15.207, 0.504],
                      [22.559, -6.345],
                      [22.559, -27.795],
                      [39.679, -27.795],
                      [45.721, -34.14],
                      [39.679, -40.485],
                      [22.559, -40.485],
                      [22.559, -56.396],
                      [45.621, -56.396],
                      [51.663, -62.842],
                      [45.621, -69.388],
                    ],
                    c: true,
                  },
                  ix: 2,
                },
                nm: 'F',
                mn: 'ADBE Vector Shape - Group',
                hd: false,
              },
            ],
            nm: 'F',
            np: 3,
            cix: 2,
            ix: 1,
            mn: 'ADBE Vector Group',
            hd: false,
          },
        ],
      },
      fFamily: 'Sofia Pro Soft',
    },
    {
      ch: 'r',
      size: 100,
      style: 'Bold',
      w: 41.3,
      data: {
        shapes: [
          {
            ty: 'gr',
            it: [
              {
                ind: 0,
                ty: 'sh',
                ix: 1,
                ks: {
                  a: 0,
                  k: {
                    i: [
                      [4.633, 0],
                      [2.618, -8.762],
                      [0, 0],
                      [3.827, 0],
                      [0.101, -3.424],
                      [0, 0],
                      [-3.726, 0],
                      [0, 3.525],
                      [0, 0],
                      [-7.855, 0],
                      [-1.007, 0],
                      [-0.504, 3.525],
                    ],
                    o: [
                      [-4.834, 0],
                      [0, 0],
                      [0, -3.525],
                      [-3.726, 0],
                      [0, 0],
                      [0.101, 3.424],
                      [3.827, 0],
                      [0, 0],
                      [0.201, -11.783],
                      [0.906, 0],
                      [3.122, 0],
                      [0.906, -6.647],
                    ],
                    v: [
                      [32.428, -47.937],
                      [20.041, -36.154],
                      [20.041, -41.29],
                      [12.991, -47.534],
                      [5.942, -41.29],
                      [5.942, -5.74],
                      [12.991, 0.504],
                      [20.041, -5.74],
                      [20.041, -17.322],
                      [30.716, -35.147],
                      [34.14, -35.046],
                      [41.089, -40.182],
                    ],
                    c: true,
                  },
                  ix: 2,
                },
                nm: 'r',
                mn: 'ADBE Vector Shape - Group',
                hd: false,
              },
            ],
            nm: 'r',
            np: 3,
            cix: 2,
            ix: 1,
            mn: 'ADBE Vector Group',
            hd: false,
          },
        ],
      },
      fFamily: 'Sofia Pro Soft',
    },
    {
      ch: 'i',
      size: 100,
      style: 'Bold',
      w: 25.8,
      data: {
        shapes: [
          {
            ty: 'gr',
            it: [
              {
                ind: 0,
                ty: 'sh',
                ix: 1,
                ks: {
                  a: 0,
                  k: {
                    i: [[0, -4.633], [-4.733, 0], [0, 4.633], [4.733, 0]],
                    o: [[0, 4.633], [4.733, 0], [0, -4.633], [-4.733, 0]],
                    v: [
                      [4.23, -64.453],
                      [12.991, -56.195],
                      [21.552, -64.453],
                      [12.991, -72.61],
                    ],
                    c: true,
                  },
                  ix: 2,
                },
                nm: 'i',
                mn: 'ADBE Vector Shape - Group',
                hd: false,
              },
              {
                ind: 1,
                ty: 'sh',
                ix: 2,
                ks: {
                  a: 0,
                  k: {
                    i: [
                      [0, 0],
                      [3.827, 0],
                      [0.101, -3.424],
                      [0, 0],
                      [-3.726, 0],
                      [0, 3.525],
                    ],
                    o: [
                      [0, -3.525],
                      [-3.726, 0],
                      [0, 0],
                      [0.101, 3.424],
                      [3.827, 0],
                      [0, 0],
                    ],
                    v: [
                      [20.041, -41.29],
                      [12.991, -47.534],
                      [5.942, -41.29],
                      [5.942, -5.74],
                      [12.991, 0.504],
                      [20.041, -5.74],
                    ],
                    c: true,
                  },
                  ix: 2,
                },
                nm: 'i',
                mn: 'ADBE Vector Shape - Group',
                hd: false,
              },
            ],
            nm: 'i',
            np: 5,
            cix: 2,
            ix: 1,
            mn: 'ADBE Vector Group',
            hd: false,
          },
        ],
      },
      fFamily: 'Sofia Pro Soft',
    },
    {
      ch: 'e',
      size: 100,
      style: 'Bold',
      w: 54.4,
      data: {
        shapes: [
          {
            ty: 'gr',
            it: [
              {
                ind: 0,
                ty: 'sh',
                ix: 1,
                ks: {
                  a: 0,
                  k: {
                    i: [[0, 0], [-5.237, 0], [-0.705, -5.74]],
                    o: [[1.208, -5.942], [5.237, 0], [0, 0]],
                    v: [
                      [17.825, -27.695],
                      [28.299, -36.255],
                      [38.168, -27.695],
                    ],
                    c: true,
                  },
                  ix: 2,
                },
                nm: 'e',
                mn: 'ADBE Vector Shape - Group',
                hd: false,
              },
              {
                ind: 1,
                ty: 'sh',
                ix: 2,
                ks: {
                  a: 0,
                  k: {
                    i: [
                      [2.618, 3.021],
                      [3.223, -2.216],
                      [2.82, 0],
                      [0.705, 5.438],
                      [0, 0],
                      [0, 2.518],
                      [13.394, 0],
                      [0, -14.804],
                      [-13.495, 0],
                      [-4.733, 3.122],
                    ],
                    o: [
                      [-2.014, -2.316],
                      [-2.921, 2.014],
                      [-4.935, 0],
                      [0, 0],
                      [2.216, 0],
                      [0, -14.804],
                      [-13.495, 0],
                      [0, 14.804],
                      [5.539, 0],
                      [3.424, -2.014],
                    ],
                    v: [
                      [46.225, -12.689],
                      [37.363, -13.394],
                      [29.205, -11.179],
                      [17.624, -18.933],
                      [47.937, -18.933],
                      [52.267, -23.264],
                      [28.198, -47.937],
                      [3.625, -23.666],
                      [28.198, 0.906],
                      [44.412, -3.323],
                    ],
                    c: true,
                  },
                  ix: 2,
                },
                nm: 'e',
                mn: 'ADBE Vector Shape - Group',
                hd: false,
              },
            ],
            nm: 'e',
            np: 5,
            cix: 2,
            ix: 1,
            mn: 'ADBE Vector Group',
            hd: false,
          },
        ],
      },
      fFamily: 'Sofia Pro Soft',
    },
    {
      ch: 'n',
      size: 100,
      style: 'Bold',
      w: 56.2,
      data: {
        shapes: [
          {
            ty: 'gr',
            it: [
              {
                ind: 0,
                ty: 'sh',
                ix: 1,
                ks: {
                  a: 0,
                  k: {
                    i: [
                      [0, 0],
                      [3.827, 0],
                      [0.101, -3.424],
                      [0, 0],
                      [-3.726, 0],
                      [0, 3.525],
                      [0, 0],
                      [-4.935, 0],
                      [0, -6.244],
                      [0, 0],
                      [-3.726, 0],
                      [0, 3.525],
                      [0, 0],
                      [10.574, 0],
                      [2.518, -4.733],
                    ],
                    o: [
                      [0, -3.525],
                      [-3.726, 0],
                      [0, 0],
                      [0.101, 3.424],
                      [3.827, 0],
                      [0, 0],
                      [0, -7.15],
                      [4.733, 0],
                      [0, 0],
                      [0.101, 3.424],
                      [3.827, 0],
                      [0, 0],
                      [0, -13.394],
                      [-5.539, 0],
                      [0, 0],
                    ],
                    v: [
                      [20.041, -41.29],
                      [12.991, -47.534],
                      [5.942, -41.29],
                      [5.942, -5.74],
                      [12.991, 0.504],
                      [20.041, -5.74],
                      [20.041, -24.875],
                      [28.702, -34.442],
                      [36.859, -25.076],
                      [36.859, -5.74],
                      [43.909, 0.504],
                      [50.958, -5.74],
                      [50.958, -28.098],
                      [33.636, -48.038],
                      [20.041, -40.182],
                    ],
                    c: true,
                  },
                  ix: 2,
                },
                nm: 'n',
                mn: 'ADBE Vector Shape - Group',
                hd: false,
              },
            ],
            nm: 'n',
            np: 3,
            cix: 2,
            ix: 1,
            mn: 'ADBE Vector Group',
            hd: false,
          },
        ],
      },
      fFamily: 'Sofia Pro Soft',
    },
    {
      ch: 'd',
      size: 100,
      style: 'Bold',
      w: 60.5,
      data: {
        shapes: [
          {
            ty: 'gr',
            it: [
              {
                ind: 0,
                ty: 'sh',
                ix: 1,
                ks: {
                  a: 0,
                  k: {
                    i: [
                      [0, 0],
                      [3.021, 0],
                      [0, -15.61],
                      [-11.984, 0],
                      [-3.021, 4.935],
                      [0, 0],
                      [-3.726, 0],
                      [0, 3.525],
                      [0, 0],
                      [3.827, 0],
                      [0.101, -3.424],
                    ],
                    o: [
                      [-4.028, -6.244],
                      [-11.984, 0],
                      [0, 15.61],
                      [5.338, 0],
                      [0, 0],
                      [0.101, 3.424],
                      [3.827, 0],
                      [0, 0],
                      [0, -3.525],
                      [-3.726, 0],
                      [0, 0],
                    ],
                    v: [
                      [40.686, -40.384],
                      [26.587, -47.937],
                      [3.726, -23.566],
                      [26.587, 0.906],
                      [40.686, -6.647],
                      [40.686, -5.74],
                      [47.736, 0.504],
                      [54.785, -5.74],
                      [54.785, -66.87],
                      [47.736, -73.114],
                      [40.686, -66.87],
                    ],
                    c: true,
                  },
                  ix: 2,
                },
                nm: 'd',
                mn: 'ADBE Vector Shape - Group',
                hd: false,
              },
              {
                ind: 1,
                ty: 'sh',
                ix: 2,
                ks: {
                  a: 0,
                  k: {
                    i: [[0, 6.244], [-7.05, 0], [0, -6.244], [6.345, 0]],
                    o: [[0, -6.244], [6.345, 0], [0, 6.244], [-7.05, 0]],
                    v: [
                      [18.228, -23.465],
                      [29.306, -35.349],
                      [40.787, -23.465],
                      [29.306, -11.581],
                    ],
                    c: true,
                  },
                  ix: 2,
                },
                nm: 'd',
                mn: 'ADBE Vector Shape - Group',
                hd: false,
              },
            ],
            nm: 'd',
            np: 5,
            cix: 2,
            ix: 1,
            mn: 'ADBE Vector Group',
            hd: false,
          },
        ],
      },
      fFamily: 'Sofia Pro Soft',
    },
    {
      ch: 'l',
      size: 100,
      style: 'Bold',
      w: 26.2,
      data: {
        shapes: [
          {
            ty: 'gr',
            it: [
              {
                ind: 0,
                ty: 'sh',
                ix: 1,
                ks: {
                  a: 0,
                  k: {
                    i: [
                      [0, 0],
                      [3.827, 0],
                      [0.101, -3.424],
                      [0, 0],
                      [-3.726, 0],
                      [0, 3.525],
                    ],
                    o: [
                      [0, -3.525],
                      [-3.726, 0],
                      [0, 0],
                      [0.101, 3.424],
                      [3.827, 0],
                      [0, 0],
                    ],
                    v: [
                      [20.242, -66.87],
                      [13.193, -73.114],
                      [6.143, -66.87],
                      [6.143, -5.74],
                      [13.193, 0.504],
                      [20.242, -5.74],
                    ],
                    c: true,
                  },
                  ix: 2,
                },
                nm: 'l',
                mn: 'ADBE Vector Shape - Group',
                hd: false,
              },
            ],
            nm: 'l',
            np: 3,
            cix: 2,
            ix: 1,
            mn: 'ADBE Vector Group',
            hd: false,
          },
        ],
      },
      fFamily: 'Sofia Pro Soft',
    },
    {
      ch: 'y',
      size: 100,
      style: 'Bold',
      w: 48.2,
      data: {
        shapes: [
          {
            ty: 'gr',
            it: [
              {
                ind: 0,
                ty: 'sh',
                ix: 1,
                ks: {
                  a: 0,
                  k: {
                    i: [
                      [0, 0],
                      [3.424, 0.906],
                      [1.108, -3.122],
                      [0, 0],
                      [0, 0],
                      [4.431, -1.108],
                      [-1.309, -3.625],
                      [0, 0],
                      [0, 0],
                      [-3.424, -0.806],
                      [-1.309, 3.122],
                    ],
                    o: [
                      [1.309, -3.625],
                      [-4.431, -1.108],
                      [0, 0],
                      [0, 0],
                      [-1.108, -3.122],
                      [-3.424, 0.906],
                      [0, 0],
                      [0, 0],
                      [-1.41, 3.625],
                      [4.33, 1.007],
                      [0, 0],
                    ],
                    v: [
                      [46.124, -38.873],
                      [41.995, -47.232],
                      [33.234, -43.204],
                      [24.17, -20.242],
                      [15.308, -43.204],
                      [6.546, -47.232],
                      [2.417, -38.873],
                      [17.02, -4.834],
                      [9.164, 14.703],
                      [13.193, 23.163],
                      [22.055, 19.235],
                    ],
                    c: true,
                  },
                  ix: 2,
                },
                nm: 'y',
                mn: 'ADBE Vector Shape - Group',
                hd: false,
              },
            ],
            nm: 'y',
            np: 3,
            cix: 2,
            ix: 1,
            mn: 'ADBE Vector Group',
            hd: false,
          },
        ],
      },
      fFamily: 'Sofia Pro Soft',
    },
  ],
}